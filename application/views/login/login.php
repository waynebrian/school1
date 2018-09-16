
<title><?php echo $title ?></title>
<link rel="stylesheet" href="<?php echo base_url('assets/css/login/login.css');?>">
<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css');?>">




<div class="p-3 -bse">
<div class="container pt-3">
  <div class="row justify-content-sm-center">
    <div class="col-sm-6 col-md-4">
      <div class="-card -txt_cntr">
        <div class="-h_card">
           <img class="-img-thumb" src="<?php echo base_url('assets/images/logos/sample.png');?>">
        </div>
           <form class="form_signin"  action="<?php echo site_url('login/auth');?>" method="post">
           <?php echo $this->session->flashdata('msg');?>
           <input type="email" name="email" class="-form-control -mb-2" placeholder="Email or ID" required autofocus>
           <input type="password" name="password" class="-form-control -mb-2" placeholder="Password" required>
           <button class="-btn -btn-lg -btn-primary -btn-block mb-1" type="submit">Sign in</button>
           <a href="#" class="-algn_ctr">Forgot password ?</a>
           <a href="#" class="-algn_ctr">Terms and Conditions</a>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

  <script src="<?php echo base_url('assets/js/dashboard/dashboard.js');?>"></script>


