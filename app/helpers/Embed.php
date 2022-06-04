<?php 

class Embed {
    public static function soundcolude($vari) {
    
        // $embed = new Embed();

    // $info = $embed->get('https://www.youtube.com/watch?v=PP1xn5wHtxE');
      $step1 = explode('v=', $vari);
      $step2 = explode('&amp;', $step1[1]);
      $iframe = '<iframe style="border:4px solid #41759d" width="460" height="259" src="http://www.youtube.com/embed/'.$step1[1].'" frameborder="0" allowfullscreen></iframe>';
  
      return $iframe;
      
    }
  }