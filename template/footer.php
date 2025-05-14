<div class="pt-3">
  <div class="container">
    <hr>
    <div class="row pt-5 pb-4">
     <div class="col" style="text-align: center; padding: 40px;">
  <h1 style="font-size: 60px; color: #007BFF; font-weight: bold; text-shadow: 2px 2px 8px rgba(0,0,0,0.2);">
    SMITC
  </h1>
  <p style="font-size: 18px; color: #555;">QR Code Generator</p>
</div>

    </div>
    <hr>
    <div class="row py-2 small mb-3">
      <div class="col-6">
        <?php echo qrcdr()->getString('title').' &copy; '.date('Y'); ?>
      </div>
  
    </div>
    <div class="row py-2">
      
    </div>
    <!-- Add modals or any additional content here -->
    <?php
    if (file_exists(dirname(dirname(__FILE__)).'/'.$relative.'template/modals.php')) {
        include dirname(dirname(__FILE__)).'/'.$relative.'template/modals.php';
    }
    ?>
  </div>
</div>

<!-- Include the custom JS for the encrypted footer link -->
<script src="<?php echo $relative; ?>js/footer_encrypt.js"></script>
<script src="<?php echo $relative; ?>js/lib/jquery.min.js"></script>
<script src="<?php echo $relative; ?>js/dashmix.app.min-5.4.js"></script>
<script src="<?php echo $relative; ?>loader/waitMe.js"></script>
<script src="<?php echo $relative; ?>js/forms.js"></script>
