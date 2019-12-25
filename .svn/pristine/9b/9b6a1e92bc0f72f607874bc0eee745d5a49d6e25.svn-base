<?php $navbar_parent = $this->db->order_by('navbar_index', 'asc')->where('navbar_status', '1')->where('navbar_parent', '0')->get('_sys_navbar')->result() ?>
<?php $parent_submenu = $this->db->where('navbar_href', $this->sys->current_url())->get('_v_sys_navbar'); ?>
<?php 
    function check_navbar_access($navbar_id) {
        $current_group = get_instance()->session->userdata('group_id');
        $navbar = get_instance()->db->where('navbar_access_group_id', $current_group);
        $navbar = get_instance()->db->where('navbar_access_navbar_id', $navbar_id);
        $navbar = get_instance()->db->get('_sys_navbar_access')->row('navbar_access_read');
        return $navbar;
    }
?>
<?php function generate_navbar($navbar_id) {?>
    <?php 
        $parent = get_instance()->db->order_by('navbar_index', 'asc')->where('navbar_status', '1')->where('navbar_id', $navbar_id)->get('_sys_navbar')->row();
        $child = get_instance()->db->order_by('navbar_index', 'asc')->where('navbar_status', '1')->where('navbar_parent', $parent->navbar_id)->get('_sys_navbar');
        $is_have_childs = $child->num_rows(); 
        $childs = $child->result(); 
    ?>

    <?php if (check_navbar_access($navbar_id)): ?>

        <?php if ($is_have_childs > 0): ?>
        <li id="navbar_<?php echo strtolower(str_replace(' ', '-', $parent->navbar_label)) ?>" class="kt-menu__item  kt-menu__item--submenu kt-menu__item--rel" data-ktmenu-submenu-toggle="click" aria-haspopup="true"><a href="javascript:;" class="kt-menu__link kt-menu__toggle"><i class="kt-menu__link-icon <?php echo $parent->navbar_icon ?>"></i><span class="kt-menu__link-text"><?php echo $parent->navbar_label ?></span><i class="kt-menu__hor-arrow la la-angle-down"></i><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
            <div class="kt-menu__submenu kt-menu__submenu--classic kt-menu__submenu--right">
                <ul class="kt-menu__subnav">
                    <?php foreach ($childs as $var): ?>
                        <?php generate_navbar($var->navbar_id, 1) ?>
                    <?php endforeach ?>
                 </ul>
            </div>
        </li>
        <?php else: ?>
            <li class="kt-menu__item <?php echo ($parent->navbar_href == get_instance()->sys->current_url()) ? 'kt-menu__item--active' : '' ?>" aria-haspopup="true"><a href="<?php echo base_url($parent->navbar_href) ?>" class="kt-menu__link "><i class="kt-menu__link-icon <?php echo $parent->navbar_icon ?>"></i><span class="kt-menu__link-text"><?php echo $parent->navbar_label ?></span></a></li>
        <?php endif ?>

    <?php endif ?>

<?php } ?>
 
<ul class="kt-menu__nav ">

    <?php foreach ($navbar_parent as $var): ?>
        <?php generate_navbar($var->navbar_id) ?>
    <?php endforeach ?>

</ul>

<?php if ($parent_submenu->num_rows() > 0): ?>
    <script type="text/javascript">
        $('#navbar_<?php echo strtolower(str_replace(' ', '-', $parent_submenu->row('navbar_child_parent_label'))) ?>').addClass('kt-menu__item--active');
    </script>
<?php endif ?>