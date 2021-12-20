                 
                    <div class="single-service-plane rounded white-bg mt-md-4 mt-lg-4">
        
                        <div class="service-plane-content p-3">
                           

                                    
                               <!--  -->



<!-- <script type="text/javascript">
  function myFunction() {
  /* Get the text field */
  var copyText = document.getElementById("myInput");

  /* Select the text field */
  copyText.select();
  copyText.setSelectionRange(0, 99999); /*For mobile devices*/

  /* Copy the text inside the text field */
  document.execCommand("copy");

  /* Alert the copied text */
 // alert("Copied to clipboard: ");
}
</script> -->
   <?php// include('petal/classblog.php'); u?>
<?php
//$sn = $sn;//$_GET['blog'];
$title = $_GET['blog'];
//$title2 = $blog->idToBlog($sn,'title');
$urlw = 'https://loth.com/article.php?blog='.$title.'/s/W';
$urlf = 'https://loth.com/article.php?blog='.$title.'/s/F';
$urlt = 'https://loth.com/article.php?blog='.$title.'/s/T';
$urll = 'https://loth.com/article.php?blog='.$title.'/s/L';
$msg = urlencode('Read this blog titled '.$title.' on Light: ');
 ?>

<a  href="whatsapp://send?text=<?php echo $msg.$urlw ?>" data-action="share/whatsapp/share" class="fa fa-whatsapp outline-btn p-3" ></a>
               

                  <a class="w-inline-block social-share-btn fb fa outline-btn p-3 fa-facebook" href="https://www.facebook.com/sharer/sharer.php?u=&t=" title="Share on Facebook" target="_blank" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u=<?php echo $urlf ?>&t=<?php echo $urlf ?>'); return false;"> </a>


                 

<a class="w-inline-block social-share-btn tw fa fa-twitter outline-btn p-3" href="https://twitter.com/intent/tweet?" target="_blank" title="Tweet" onclick="window.open('https://twitter.com/intent/tweet?text=Check%20out%20this%20Interseting%20Blog'  + ':%20<?php echo $urlt ?>'); return false;"></a>


<!--                     <a href="" class="fa fa-instagram outline-btn p-3"></a>
 -->                 
                    <a class="w-inline-block social-share-btn lnk fa fa-linkedin outline-btn p-3" href="http://www.linkedin.com/shareArticle?mini=true&url=&title=&summary=&source=" target="_blank" title="Share on LinkedIn" onclick="window.open('http://www.linkedin.com/shareArticle?mini=true&url=' + '<?php echo $urll ?>'; return false;"></a>
            
                                                       
                                    
                        </div>
                        
                    </div>