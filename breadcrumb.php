<ul class="breadcrumb">
  <li>
    <a href="">Services</a>
  </li>
  <?php if ($page === "Blockchain"): ?>
  <li>
    <a href="./blockchain.php">Blockchain</a>
  </li>
  <?php endif; ?>
  <?php if ($page === "Cloud Platform" || $page === "IAAS"): ?>
  <li>
    <a href="./cloud.php">Cloud Platform</a>
  </li>
  <?php if ($page === "IAAS"): ?>
  <li>
    <a href="./iaas.php">Iaas</a>
  </li>
  <?php endif; ?>
  <?php endif; ?>
</ul>

<div class="quicklinks">
  <a href="#" class="quicklinks-toggler"></a>
  <ul class="quicklinks-nav">
    <li class="quicklink">
      <a href="">
        <span class="quicklink-title">
          International Business Networks
        </span>
        <img src="./img/quicklink1.jpg" alt="" />
      </a>
    </li>
    <li class="quicklink">
      <a href="">
        <span class="quicklink-title">
          Cloud Hosting
        </span>
        <span class="quicklink-content">Hosting of websites on virtual servers which are founded upon pooled resources from underlying servers</span>
      </a>
    </li>
    <li class="quicklink">
      <a href="">
        <span class="quicklink-title">
          Virtual Data Centres (VDC)
        </span>
        <img src="./img/quicklink2.jpg" alt="" />
      </a>
    </li>
  </ul>
</div>