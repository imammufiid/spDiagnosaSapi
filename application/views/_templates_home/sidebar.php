<?php $sidebar_parent = $this->db->order_by('sidebar_index', 'asc')->where('sidebar_status', '1')->where('sidebar_parent', '0')->get('_sys_sidebar')->result() ?>
<?php $parent_submenu = $this->db->where('sidebar_href', $this->sys->current_url())->get('_v_sys_sidebar'); ?>
<?php 
    function check_sidebar_access($sidebar_id) {
        $current_group = get_instance()->session->userdata('group_id');
        $sidebar = get_instance()->db->where('sidebar_access_group_id', $current_group);
        $sidebar = get_instance()->db->where('sidebar_access_sidebar_id', $sidebar_id);
        $sidebar = get_instance()->db->get('_sys_sidebar_access')->row('sidebar_access_read');
        return $sidebar;
    }
?>
<?php function generate_menu($sidebar_id) {?>
    <?php 
        $parent = get_instance()->db->order_by('sidebar_index', 'asc')->where('sidebar_status', '1')->where('sidebar_id', $sidebar_id)->get('_sys_sidebar')->row();
        $child = get_instance()->db->order_by('sidebar_index', 'asc')->where('sidebar_status', '1')->where('sidebar_parent', $parent->sidebar_id)->get('_sys_sidebar');
        $is_have_childs = $child->num_rows(); 
        $childs = $child->result(); 
    ?>

    <?php if (check_sidebar_access($sidebar_id)): ?>

        <?php if ($is_have_childs > 0): ?>
        <li id="sidebar_<?php echo strtolower(str_replace(' ', '-', $parent->sidebar_label)) ?>" class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="javascript:;" class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-icon <?php echo $parent->sidebar_icon ?>" style="<?php echo ($parent->sidebar_href ==  get_instance()->sys->current_url()) ? 'color: #5d78ff;' : 'color: #434349;' ?>"></i><span class="kt-menu__link-text" style="<?php echo ($parent->sidebar_href ==  get_instance()->sys->current_url()) ? 'color: #434349;' : 'kt-menu__item--active ' ?>"><?php echo $parent->sidebar_label ?></span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
            <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
                <ul class="kt-menu__subnav">
                    <li class="kt-menu__item  kt-menu__item--parent" aria-haspopup="true"><span class="kt-menu__link"><span class="kt-menu__link-text" style="<?php echo ($parent->sidebar_href ==  get_instance()->sys->current_url()) ? '' : 'color: #434349;' ?>"><?php echo $parent->sidebar_label ?></span></span></li>
                    <?php foreach ($childs as $var): ?>
                        <?php generate_menu($var->sidebar_id) ?>
                    <?php endforeach ?>
                 </ul>
            </div>
        </li>
        <?php else: ?>
            <li class="kt-menu__item <?php echo ($parent->sidebar_href ==  get_instance()->sys->current_url()) ? 'kt-menu__item--active' : '' ?>" aria-haspopup="true"><a href="<?php echo base_url($parent->sidebar_href) ?>" class="kt-menu__link "><i class="kt-menu__link-icon <?php echo $parent->sidebar_icon ?>" style="<?php echo ($parent->sidebar_href ==  get_instance()->sys->current_url()) ? '' : 'color: #434349;' ?>"></i><span class="kt-menu__link-text" style="<?php echo ($parent->sidebar_href ==  get_instance()->sys->current_url()) ? '' : 'color: #434349;' ?>"><?php echo $parent->sidebar_label ?></span></a></li>
        <?php endif ?>
        
    <?php endif ?>
<?php } ?>

<ul class="kt-menu__nav ">

    <?php foreach ($sidebar_parent as $var): ?>
        <?php generate_menu($var->sidebar_id) ?>
    <?php endforeach ?>

</ul>

<?php if ($parent_submenu->num_rows() > 0): ?>
    <script type="text/javascript">
        $('#sidebar_<?php echo strtolower(str_replace(' ', '-', $parent_submenu->row('sidebar_child_parent_label'))) ?>').addClass('kt-menu__item--active');
    </script>
<?php endif ?>