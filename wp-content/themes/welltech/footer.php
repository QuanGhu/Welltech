</div>
<footer id="footer" role="contentinfo">
  <div class="footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 copyright">
          &copy; 2016 Welltech Construction. All Rights Reserved.
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
          <ul>
            <li><a href="#"><div class="outer"><i class="fa fa-facebook" aria-hidden="true"></i></div></a></li>
            <li><a href="#"><div class="outer"><i class="fa fa-instagram" aria-hidden="true"></i></div></a></li>
            <li><a href="#"><div class="outer"><i class="fa fa-twitter" aria-hidden="true"></i></div></a></li>
            <li><a href="#"><div class="outer"><i class="fa fa-flickr" aria-hidden="true"></i></div></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</footer>
</div>
<?php wp_footer(); ?>
<script type="text/javascript">
$('.map-container')
  .click(function(){
      $(this).find('iframe').addClass('clicked')})
  .mouseleave(function(){
      $(this).find('iframe').removeClass('clicked')});
</script>
</body>
</html>
