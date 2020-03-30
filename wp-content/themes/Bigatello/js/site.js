jQuery(document).ready(function($){
  
  if(window.location.hash !== "") {
    $('a[href="' + window.location.hash + '"]').click();
    $target =$('a[href="' + window.location.hash + '"]');
    var finaldestination = $($target).offset().top - 300;
    $('html, body').animate({scrollTop: finaldestination},800);
  }
  
  var scrollingAnimations = true; // Set true for turn on animation
  if(scrollingAnimations){
    new WOW().init();
  }
  
  $('li.home-superior').find('a').html('<i class="fa fa-home text-orange"></i>');
  
  if( $(document).width() > 768 ){
    $(document).scroll(function(){
      if( $(document).scrollTop() > 30 ){
        $('.header').addClass('scroll');
        $('.header-inner').addClass('scroll');
      }else{
        $('.header').removeClass('scroll');
        $('.header-inner').removeClass('scroll');
      } 
    });
  }
  
  $('.form-busca-ingredientes').on('submit', function(){
    getPostsBusca($(this));
    return false;
  });

  $('.btn-load').on('click', function(){
    getPosts($(this));
    return false;
  });
  
  $('.banner .lista-banners').slick({
    arrows: true,
    dots: true,
    rows: 1,
    slidesPerRow: 1,
    autoplay: true,
    autoplaySpeed:2000
  });
  
  $('.lista-clientes').slick({
    arrows: true,
    dots: false,
    rows: 1,
    slidesPerRow: 6,
    autoplay: false,
    autoplaySpeed:5000,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesPerRow: 1,
        }
      },
    ]
  });
  
  
  $(".galeria a").fancybox();
  $(".gallery-item a").fancybox();
  $(".gallery-item a").each(function () {
    $(this).attr('rel', 'galeria');
  });
  $("a.fancybox").fancybox();
  
  $('a.fancyvideo').fancybox( { 'overlayShow': true, 'type' : 'iframe', 'width' : '640', 'height' : '480', 'titleShow' : false, 'titlePosition' : 'float', 'titleFromAlt' : true, 'autoSize': false, 'autoDimensions': true, } );
  $('.iframe-ligamos a').fancybox( { 'overlayShow': true, 'type' : 'iframe', 'width' : '550', 'height' : 'auto', 'titleShow' : false, 'titlePosition' : 'float', 'titleFromAlt' : true, 'autoSize': false, 'autoDimensions': true, } );
  
  
  $('.navbar-toggle').on('click', function(){
    $('.menu-mobile').toggleClass('show');
  });
  
  
  $('.seta').on('click',function(){
    $target     = $('.a-berlan');
    var finaldestination = $($target).offset().top - 100;
    $('html, body').animate({scrollTop: finaldestination},800);
  });
  
  $("html .wpcf7-validates-as-tel").mask("(99) 9999-9999?9");
  $("html .validate-as-tel").mask("(99) 9999-9999?9");
  
});

document.addEventListener( 'wpcf7mailsent', function( event ) {
    window.location.href = '/obrigado';
}, false );


function getPosts($t){
  $p = $t.attr('data-pagina');
  $a = $t.attr('data-alvo');
  $u = $t.attr('data-url');
  $c = $('.segmentos').val();
  $b = $('.termos').val();
  $t.html($t.html() + '<i class="fa fa-cog fa-spin fa-fw"></i>');
  ajax = jQuery.ajax({
    url:  $u,
    async: true,
    method: 'POST',
    data: {sid: Math.random(), c: $c, p: $p, b: $b},
    success: function(data){
      $r = data.split('¬');
      if( $r[0] !== 'SP' ){
        $('.'+$a).append($r[1]);
        if( $r[0] == 'S' ){
          $t.html('carregar mais');
          $t.attr('data-pagina', parseInt($p) + 1);
          $t.removeAttr('disabled');
          $t.removeClass('disabled');
        }else{
          $t.html('sem mais ingredientes <i class="fa fa-ban"></i>');
          $t.addClass('disabled');
          $t.attr('disabled', 'disabled');
        }
      }else{
        $t.html('sem mais ingredientes <i class="fa fa-ban"></i>');
        $t.addClass('disabled');
        $t.attr('disabled', 'disabled');
      }
    },
    beforeSend: function(){
    },
    complete: function(){
      
    }
  });
}

function getPostsBusca($t){
  $p = 1;
  $a = $t.attr('data-alvo');
  $u = $t.attr('data-url');
  $c = $('.segmentos').val();
  $b = $('.termos').val();
  if( $t.attr('class') == 'form-busca-ingredientes'){
    $t.find('.btn-ok').html($t.find('.btn-ok').html() + '<i class="fa fa-cog fa-spin fa-fw"></i>');
  }else{
    $t.html($t.html() + '<i class="fa fa-cog fa-spin fa-fw"></i>');
  }
  ajax = $.ajax({
    url:  $u,
    async: true,
    method: 'POST',
    data: {sid: Math.random(), c: $c, p: $p, b: $b},
    success: function(data){
      $r = data.split('¬');
      if( $r[0] !== 'SP' ){
        if( $('#ingredientes-ajax').hasClass('slick-initialized')){
          $('.lista-ingredientes-ajax').slick('unslick');
        }
        $('.'+$a).html('');
        $('.'+$a).html($r[1]);
        $('.lista-ingredientes-ajax').slick(carrosselIngredientes());
        if( $r[0] == 'S' ){
          if( $t.attr('class') == 'form-busca-ingredientes'){
            $t.find('.btn-ok').html('OK');
          }else{
            $t.html($t.html() + '<i class="fa fa-cog fa-spin fa-fw"></i>');
          }
          $('.btn-load').html('carregar mais');
          $('.btn-load').attr('data-pagina', parseInt($p) + 1);
          $('.btn-load').removeAttr('disabled');
          $('.btn-load').removeClass('disabled');
          $('.btn-load').attr('data-pagina', parseInt($p) + 1);
        }else{
          if( $t.attr('class') == 'form-busca-ingredientes'){
            $t.find('.btn-ok').html('OK');
          }else{
            $t.html($t.html() + '<i class="fa fa-cog fa-spin fa-fw"></i>');
          }
          $('.btn-load').html('sem mais ingredientes <i class="fa fa-ban"></i>');
          $('.btn-load').addClass('disabled');
          $('.btn-load').attr('disabled', 'disabled');
        }
      }else{
        if( $t.attr('class') == 'form-busca-ingredientes'){
          $t.find('.btn-ok').html('OK');
        }else{
          $t.html($t.html() + '<i class="fa fa-cog fa-spin fa-fw"></i>');
        }
        $('.'+$a).html('<div class="alert alert-danger">Nenhum ingrediente encontrado com os filtros selecionados!</div>');
        $('.btn-load').html('sem mais ingredientes <i class="fa fa-ban"></i>');
        $('.btn-load').addClass('disabled');
        $('.btn-load').attr('disabled', 'disabled');
      }
    },
    beforeSend: function(){
    },
    complete: function(){
      $('.lista-ingredientes-ajax').slick(carrosselIngredientes());
    }
  });
}
function carrosselIngredientes(){
  return {
    arrows: true,
    dots: false,
    autoplay: false,
    rows: 3,
    slidesPerRow: 4
  };
}