<ul class="sidebar-menu">
  <li class="header">MAIN NAVIGATION</li>
  <li>
    <a href="<?php echo base_url('dashboard/admin'); ?>">
      <i class="fa fa-dashboard"></i> <span>Dashboard</span>
      <span class="pull-right-container">
        <i class="fa pull-right"></i>
      </span>
    </a>
  </li>

  <li>
    <a href="#">
      <i class="fa fa-database"></i> <span>Master Data</span>
      <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
      </span>
    </a>
    <ul class="treeview-menu">
      <li class="active"><a href="<?php echo base_url('dashboard/admin/schremblewords/list'); ?>"><i class="fa fa-circle-o"></i> Master Schremble Stage 1</a></li>
      <li class="active"><a href="<?php echo base_url('dashboard/admin/schremblewords/list'); ?>"><i class="fa fa-circle-o"></i> Master Schremble Stage 2</a></li>
      <li class="active"><a href="<?php echo base_url('dashboard/admin/schremblewords/list'); ?>"><i class="fa fa-circle-o"></i> Master Schremble Stage 3</a></li>
      <li class="active"><a href="<?php echo base_url('dashboard/admin/schremblewords/list'); ?>"><i class="fa fa-circle-o"></i> Master Schremble Stage 4</a></li>
      <li class="active"><a href="<?php echo base_url('dashboard/admin/data/soal/list'); ?>"><i class="fa fa-circle-o"></i> Master Soal </a></li>
      <li class="active"><a href="<?php echo base_url('dashboard/admin/data/user/list'); ?>"><i class="fa fa-circle-o"></i> Master User </a></li>
    </ul>
  </li>

  <li>
   <a href="#">
     <i class="glyphicon glyphicon-user"></i> <span>Finalis</span>
     <span class="pull-right-container">
       <i class="fa fa-angle-left pull-right"></i>
     </span>
   </a>
   <ul class="treeview-menu">
     <li class="active"><a href=""><i class="fa fa-circle-o"></i> View Finalis </a></li>
   </ul>
 </li>

 <li>
   <a href="#">
     <i class="glyphicon glyphicon-cog"></i> <span>Settings</span>
     <span class="pull-right-container">
       <i class="fa fa-angle-left pull-right"></i>
     </span>
   </a>
   <ul class="treeview-menu">
     <li class="active"><a href=""><i class="fa fa-circle-o"></i> Your Profile</a></li>
     <li class="active"><a href=""><i class="fa fa-circle-o"></i> Change Password </a></li>
   </ul>
 </li>
</ul>