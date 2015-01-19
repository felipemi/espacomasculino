<!DOCTYPE html>
<html lang="en" id="top" class=" js no-touch localstorage"><!--<![endif]-->
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>Contato | Espaço Masculino</title>
  <meta name="description" content="Default Description">
  <meta name="robots" content="INDEX,FOLLOW">
  <meta name="viewport" content="initial-scale=1.0, width=device-width">
  <meta name="description" content="Loja Espaço Masculino atua no segmento de roupas masculinas e femininas, atendendo do Esporte ao Casual e Social. Localizada em União da Vitória - PR." />

  <script src="lib/jquery-1.10.2.min.js"></script>
    <script src="lib/jquery.mixitup.min.js"></script>
    <script src="lib/main.min.js"></script>
    <script src="lib/custommenu/custommenu.js"></script>
    <script src="lib/custommenu/webtoolkit.base64.js"></script>
    <script type="text/javascript" src="lib/fliplightbox.min.js"></script>

  <link rel="stylesheet" type="text/css" href="css/style_loja.css" media="all">
  <link rel="stylesheet" type="text/css" href="css/style_galeria.css" media="all">
  <link rel="stylesheet" type="text/css" href="css/custommenu.css" media="all">


  <script type="text/javascript">
  //<![CDATA[
  Mage.Cookies.path     = '/loja';
  Mage.Cookies.domain   = '.www.espacomasculino.com.br';
  //]]>
  </script>

<style>

#myparallaxslider{
    width:100%; 
    height:600px;
}

#container .mix{
  display: none;
}

#success, #error {
  display:none
}
#success span, #erro span {
  display:block;
  position:absolute;
  top:0;
  width:100%
}

#submit{
border: 2px solid #333;
padding: 6px 30px;
  background: #333;
  font-size: 20px;
  color: #fff;
  float: right;
}

</style>


<script>
     
  $(function(){

  // Instantiate MixItUp:

  $('.container').mixItUp();

  $("#menu4, #popup4").on("mouseenter", function() {
      $("#popup4").show();
  }).on("mouseleave", function() {
        $("#popup4").hide();
  });

  $("#menu5, #popup5").on("mouseenter", function() {
      $("#popup5").show();
  }).on("mouseleave", function() {
        $("#popup5").hide();
  });

  $("#menu6, #popup6").on("mouseenter", function() {
      $("#popup6").show();
  }).on("mouseleave", function() {
        $("#popup6").hide();
  });


  $('body').flipLightBox();

});

</script>



<script>

  $(function(){

      $("#contato").on("submit", function(e){
          e.preventDefault();

          var dados = $(this).serialize();
          $.ajax({
              type: 'post',
              url: 'enviar.php',
              data: dados,
              success: function(result){
                  alert(result);
                  location.reload();
              }
          });
      });
  });

</script>


<div class="wrapper">

    <div class="page">
  
    <!-- Skip Links -->
 
      <div class="header">

        <div class="menu-topo">
     
<!--

        <div class="skip-links">
            <a href="#header-nav" class="skip-link skip-nav">
                <span class="icon"></span>
                <span class="label">Menu</span>
            </a>

            <a href="#header-search" class="skip-link skip-search">
                <span class="icon"></span>
                <span class="label">Buscar</span>
            </a>

            <a href="#header-account" class="skip-link skip-account">
                <span class="icon"></span>
                <span class="label">Conta</span>
            </a>

            <!-- Cart -->

            <!--<div class="header-minicart">
                

              <a href="#header-cart" class="skip-link skip-cart  no-count">
                  <span class="icon"></span>
                  <span class="label">Carrinho de compras</span>
                  <span class="count">0</span>
              </a>

              <div id="header-cart" class="block block-cart skip-content">
                  
              <div id="minicart-error-message" class="minicart-message"></div>
              <div id="minicart-success-message" class="minicart-message"></div>

              <div class="minicart-wrapper">

                  <p class="block-subtitle">
                      Item(ns) adicionado(s) recentemente        <a class="close skip-link-close" href="#" title="Fechar">×</a>
                  </p>

                                  <p class="empty">Você não possui itens no carrinho de compras.</p>

                  </div>
              </div>
            </div>-->
        
     
        <!-- Navigation -->

          <a class="logo" href="index.html">
              <img src="img/logo-espacomasculino.png" alt="Espaço Masculino" class="large">
              <img src="img/logo-espacomasculino.png" alt="Espaço Masculino" class="small">
          </a> 

        <div id="header-nav" class="skip-content"> 
          
        <div class="nav-container">
          
          <div id="custommenu" class="" style="">
            <div id="popup4" class="custom-menu-popup" style="top: 53px; left: 0px; z-index: 10000; display: none;">
              <div class="block1">
              <div class="column first odd">
                <div class="itemMenu level1">
                  <a class="itemMenuName level1" href="#"><span>Marcas</span></a>
                  <div class="itemSubMenu level1">
                    <div class="itemMenu level2">
                      <a class="itemMenuName level2" href="#"><span>Andriello</span></a>
                      <a class="itemMenuName level2" href="#"><span>Base</span></a>
                      <a class="itemMenuName level2" href="#"><span>Colcci</span></a>
                      <a class="itemMenuName level2" href="#"><span>Docthos</span></a>
                      <a class="itemMenuName level2" href="#"><span>Dudalina</span></a>
                      <a class="itemMenuName level2" href="#"><span>Fideli</span></a>
                      <a class="itemMenuName level2" href="#"><span>Highstil</span></a>
                      <a class="itemMenuName level2" href="#"><span>Individual</span></a>
                      <a class="itemMenuName level2" href="#"><span>Ogochi</span></a>
                      <a class="itemMenuName level2" href="#"><span>Poggio</span></a>
                      <a class="itemMenuName level2" href="#"><span>Zanatta</span></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="column last even">
                <div class="itemMenu level1">
                  <a class="itemMenuName level1" href="#"><span>Categorias</span></a>
                  <div class="itemSubMenu level1">
                    <div class="itemMenu level2">
                      <a class="itemMenuName level2" href="homem/blazers"><span>Blazers</span></a>
                      <a class="itemMenuName level2" href="homem/blusas"><span>Blusas</span></a></div>
                      <a class="itemMenuName level2" href="homem/camisas"><span>Camisas</span></a>
                      <a class="itemMenuName level2" href="homem/camisas-polo"><span>Camisas Pólo</span></a>
                      <a class="itemMenuName level2" href="homem/camisetas"><span>Camisetas</span></a>
                      <a class="itemMenuName level2" href="homem/sapatos"><span>Sapatos</span></a>
                      <a class="itemMenuName level2" href="homem/sapatenis"><span>Sapatênis</span></a>
                      <a class="itemMenuName level2" href="homem/ternos"><span>Ternos</span></a>
                    </div>
                  </div>
                </div>

                <div class='menu-img' style='top: 16%;'><img src="img/menu-homem.png"></div>
                <div class="clearBoth"></div>
              </div>
            </div>

            <div id="popup5" class="custom-menu-popup" style="top: 53px; left: 0px; z-index: 10000; display: none;"> <!--onmouseout="HideMenuPopup(this, event, 'popup5', 'menu5')" onmouseover="PopupOver(this, event, 'popup5', 'menu5')"-->
              <div class="block1">
                <div class="column first odd">
                  <div class="itemMenu level1">
                    <a class="itemMenuName level1" href="#"><span>Marcas</span></a>
                    <div class="itemSubMenu level1">
                      <div class="itemMenu level2">
                        <a class="itemMenuName level2" href="#"><span>Docthos</span></a>
                        <a class="itemMenuName level2" href="#"><span>Dudalina</span></a>
                        <a class="itemMenuName level2" href="#"><span>Poggio</span></a>
                        <a class="itemMenuName level2" href="#"><span>Rofer</span></a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="column last even">
                  <div class="itemMenu level1">
                    <a class="itemMenuName level1" href="#"><span>Categorias</span></a>
                    <div class="itemSubMenu level1">
                      <div class="itemMenu level2">
                        <a class="itemMenuName level2" href="mulher/blazers"><span>Blazers</span></a>
                        <a class="itemMenuName level2" href="mulher/blusas"><span>Blusas</span></a>
                        <a class="itemMenuName level2" href="mulher/camisas"><span>Camisas</span></a>
                        <a class="itemMenuName level2" href="mulher/camisetas"><span>Camisetas</span></a>
                        <a class="itemMenuName level2" href="mulher/vestidos"><span>Vestidos</span></a>
                      </div>
                    </div>
                  </div>
                </div>

                <div class='menu-img' style='top: 16%;'><img src="img/menu-mulher.png"></div>
                <div class="clearBoth"></div>
              </div>
            </div>

            <div id="popup6" class="custom-menu-popup" style="top: 53px; left: 0px; z-index: 10000; display: none;">
              <div class="block1">
                <div class="column first odd">
                  <div class="itemMenu level1">
                    <a class="itemMenuName level1" href="acessorios/cintos"><span>Cintos</span></a>
                  </div>
                </div>
                <div class="column last even">
                  <div class="itemMenu level1">
                    <a class="itemMenuName level1" href="acessorios/gravatas"><span>Gravatas</span></a>
                  </div>
                </div>

                <div class='menu-img' style='top: 16%;'><img src="img/menu-acessorios.png"></div>
                <div class="clearBoth"></div>
              </div>
            </div>

            <div class="menu">
              <div class="parentMenu menu0">
                  <a href="home">
                      <span>Início</span>
                  </a>
              </div>
            </div>

            <div id="menu3" class="menu">
              <div class="parentMenu">
                <a href="sobre" rel="sobre">
                  <span>Sobre</span>
                </a>
              </div>
            </div>

            <div id="menu4" class="menu"> <!-- onmouseover="ShowMenuPopup(this, event, 'popup4');" onmouseout="HideMenuPopup(this, event, 'popup4', 'menu4')"-->
              <div class="parentMenu">
                <a href="#" rel="">
                  <span>Homem</span>
                </a>
              </div>
            </div>

            <div id="menu5" class="menu">
              <div class="parentMenu">
                <a href="#" rel="">
                  <span>Mulher</span>
                </a>
              </div>
            </div>

            <div id="menu6" class="menu">
              <div class="parentMenu">
                <a href="#" rel="">
                  <span>Acessórios</span>
                </a>
              </div>
            </div>

            <div id="menu7" class="menu">
              <div class="parentMenu">
                <a href="contato" rel="contato">
                  <span>Contato</span>
                </a>
              </div>
            </div>

            <div class="clearBoth"></div>
          </div>

          <div id="custommenu-mobile" class="" style="display: none;">
              <div id="menu-button" onclick="MenuButtonToggle()">
                  <a href="javascript:void(0);">
                      <span>Menu</span>
                  </a>
              </div>
              <div id="menu-content" style="display: none;">
                  <div id="menu-mobile-loading" class="menu-mobile level0">
                      <div class="parentMenu">
                          <a href="javascript:;">
                              <span>Loading...</span>
                          </a>
                      </div>
                  </div>
                  <div class="clearBoth"></div>
              </div>
          </div>
        </div>

        <script type="text/javascript">
              //<![CDATA[
              var CUSTOMMENU_POPUP_WIDTH = 0;
              var CUSTOMMENU_POPUP_TOP_OFFSET = 0;
              var CUSTOMMENU_POPUP_DELAY_BEFORE_DISPLAYING = 150;
              var CUSTOMMENU_POPUP_DELAY_BEFORE_HIDING = 100;
              var CUSTOMMENU_RTL_MODE = 0;
              var CustommenuTimerShow = {};
              var CustommenuTimerHide = {};
              var ActiveMenu = null;
              var MobileMenuEnabled = 1;
              var MenuAjaxUrl = '//www.espacomasculino.com.br/loja/custommenu/ajaxmenucontent/';
              var MoblieMenuAjaxUrl = '//www.espacomasculino.com.br/loja/custommenu/ajaxmobilemenucontent/';
              var PopupMenuContent = '';
              var MobileMenuContent = '';
              CustomMenuMobileToggle();
              Event.observe(window, 'resize', function() {
                  CustomMenuMobileToggle();
              });
              //]]>
        </script>
        </div>

        <!-- Search -->

          <div id="header-search" class="skip-content"></div>

        <!-- Account -->

          <div id="header-account" class="skip-content">
            <div class="links">
              <ul>
                <li class="first"><a href="http://www.espacomasculino.com.br/loja/customer/account/" title="Minha Conta">Minha Conta</a></li>
                <li><a href="http://www.espacomasculino.com.br/loja/wishlist/" title="Minha lista de presentes">Minha lista de presentes</a></li>
                <li><a href="http://www.espacomasculino.com.br/loja/checkout/cart/" title="Meu Carrinho" class="top-link-cart">Meu Carrinho</a></li>
                <li><a href="http://www.espacomasculino.com.br/loja/checkout/" title="Encerrar Compra" class="top-link-checkout">Encerrar Compra</a></li>
                <li><a href="http://www.espacomasculino.com.br/loja/customer/account/create/" title="Cadastrar">Cadastrar</a></li>
                <li class=" last"><a href="http://www.espacomasculino.com.br/loja/customer/account/login/" title="Entrar">Entrar</a></li>
              </ul>
            </div>
          </div>

              <!-- Cart -->

              <!-- <div id="header-cart" class="skip-content">
                  <div class="mini-cart">
                      <div class="menu-wrapper">
                          <div class="menu cart-menu">
                              <div class="empty">Your cart is empty.</div>
                          </div>
                      </div>
                  </div>
              </div> -->
        </div>
         
      </div>

      <header id="header" class="page-header">
           
        <div class="page-header-container">
          <div class="store-language-container"></div>
        </div>    
       
      </header>




      </div>


    <div class="main-container col2-left-layout">

        <div class="conteudo">

          <div class="controls">

            <div class="titulo">
              <h2>Contato</h2>
            </div>

          </div>
                    
          <div class="mapa">
            
            <div class="google-maps">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1789.4530019931071!2d-51.086568567598164!3d-26.23224354620945!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94e661fabeaa8369%3A0x5080737d59a8567d!2sR.+Carlos+Cavalcante%2C+178%2C+Uni%C3%A3o+da+Vit%C3%B3ria+-+PR%2C+84600-000!5e0!3m2!1spt-BR!2sbr!4v1418660728821" width="600" height="450" frameborder="0" style="border:0"></iframe>
            </div>
          </div>


          <div class="informacoes">

            <form id="contato" name="contato" method="post">  
            <fieldset>  
              <input type="text" class='campo' name="nome" id="nome" placeholder='Seu nome *' maxlength="60" required/>

              <input type="text" class='campo' name="telefone" id="telefone" placeholder='Seu telefone' maxlength="11" />

              <input type="text" class='campo' name="email" id="email" placeholder='Seu email *' maxlength="60" required/>

              <textarea class='campo' name="mensagem" id="mensagem" placeholder='Mensagem *' required></textarea>

              <input id="submit" type="submit" name="submit" value="Enviar" />  
            </fieldset>  
            </form>

            <div class="enderecos">
              <p><b>Endereço:</b><br /> Rua Carlos Cavalcantti 78</p><br />
              <p><b>Telefone: </b><br /> 42 3522-4850</p><br />
              <p><b>Email:</b><br /> <a href='mailto:espacomasculino@uol.com.br'>espacomasculino@uol.com.br</a></p>
            </div>


          </div>

        </div>

    </div>
        
    <div class="footer-container">
        <div class="footer-top">
            <div class="redessociais">
              <a href="#"><div id="facebook"><span>Facebook</span></div></a>
              <a href="#"><div id="twitter"><span>Twitter</span></div></a>
              <a href="#"><div id="googlemaps"><span>Google Maps</span></div></a>
            </div>
        </div>

        <div class="footer">
            <div class="block block-subscribe">
              <div class="block-title">
                <strong><span>Newsletter</span></strong>
              </div>
              <p>CADASTRE-SE E RECEBA OFERTAS EXCLUSIVAS</p>
              <form action="http://www.espacomasculino.com.br/loja/newsletter/subscriber/new/" method="post" id="newsletter-validate-detail">
                  <div class="block-content">
                      <div class="form-subscribe-header">
                          <label for="newsletter">Assinar Nossa Newsletter:</label>
                      </div>
                      <span class="icon">icon</span>
                      <div class="input-box">
                         <input type="email" autocapitalize="off" placeholder="Email" autocorrect="off" spellcheck="false" name="email" id="newsletter" title="Assinar nossa newsletter" class="input-text required-entry validate-email">
                      </div>
                      <div class="actions">
                          <button type="submit" title="Assinar" class="button"><span><span>Assinar</span></span></button>
                      </div>
                  </div>
              </form>

            <script type="text/javascript">
            //<![CDATA[
                var newsletterSubscriberFormDetail = new VarienForm('newsletter-validate-detail');
            //]]>
            </script>
            </div>

          <div class="links">
            <div class="block-title"><strong><span>Facebook</span></strong></div>
            <div class="fb-like-box fb_iframe_widget" data-href="https://www.facebook.com/pages/Espaço-Masculino-Ltda-Epp/195473793917472" data-width="250" data-height="280" data-colorscheme="light" data-show-faces="true" data-header="true" data-stream="false" data-show-border="false" fb-xfbml-state="rendered" fb-iframe-plugin-query="app_id=788110707899810&amp;color_scheme=light&amp;header=true&amp;height=280&amp;href=https%3A%2F%2Fwww.facebook.com%2Fpages%2FEspa%C3%A7o-Masculino-Ltda-Epp%2F195473793917472&amp;locale=en_US&amp;sdk=joey&amp;show_border=false&amp;show_faces=true&amp;stream=false&amp;width=250"><span style="vertical-align: bottom; width: 250px; height: 280px;"><iframe name="f31eb9e36" width="250px" height="280px" frameborder="0" allowtransparency="true" scrolling="no" title="fb:like_box Facebook Social Plugin" src="http://www.facebook.com/v2.0/plugins/like_box.php?app_id=788110707899810&amp;channel=http%3A%2F%2Fstatic.ak.facebook.com%2Fconnect%2Fxd_arbiter%2F7r8gQb8MIqE.js%3Fversion%3D41%23cb%3Df3790864f%26domain%3Dwww.espacomasculino.com.br%26origin%3Dhttp%253A%252F%252Fwww.espacomasculino.com.br%252Ff1b5af36fc%26relation%3Dparent.parent&amp;color_scheme=light&amp;header=true&amp;height=280&amp;href=https%3A%2F%2Fwww.facebook.com%2Fpages%2FEspa%C3%A7o-Masculino-Ltda-Epp%2F195473793917472&amp;locale=en_US&amp;sdk=joey&amp;show_border=false&amp;show_faces=true&amp;stream=false&amp;width=250" style="border: none; visibility: visible; width: 250px; height: 280px;" class=""></iframe></span></div>
          </div>

          <div class="formpesquisa">
            <form id="search_mini_form" action="http://www.espacomasculino.com.br/loja/catalogsearch/result/" method="get">
                <div class="input-box">
                  <label for="search">Pesquisa:</label>
                  <input id="search" type="search" name="q" value="" class="input-text required-entry" maxlength="128" placeholder="Pesquise toda a loja aqui...">
                  <button type="submit" title="Buscar" class="button search-button"><span><span>Buscar</span></span></button>
                </div>

                <div id="search_autocomplete" class="search-autocomplete"></div>
                <script type="text/javascript">
                //<![CDATA[
                    //var searchForm = new Varien.searchForm('search_mini_form', 'search', '');
                    //searchForm.initAutocomplete('http://www.espacomasculino.com.br/loja/catalogsearch/ajax/suggest/', 'search_autocomplete');
                //]]>
                </script>
            </form>
          </div>        


          <div class="footer-widgets">
            <div class="block-title"><strong>Marcas</strong></div>

            <div style="float: left"><span>Masculino</span><br>
              <a href="#">Andriello</a>
              <a href="#">Base</a>
              <a href="#">Colcci</a>
              <a href="#">Docthos</a>
              <a href="#">Dudalina</a>
              <a href="#">Fideli</a>
              <a href="#">Highstil</a>
              <a href="#">Individual</a>
              <a href="#">Ogochi</a>
              <a href="#">Poggio</a>
            </div><br>
            <div style="float: left; margin-top: 14px;"><span>Feminino</span><br>
              <a href="#">Docthos</a>
              <a href="#">Dudalina</a>
              <a href="#">Poggio</a>
              <a href="#">Rofer</a>
            </div>
            <div style="clear:both;"></div>
          </div>
        </div>
    </div>

    <div class="footer-bottom">
      <div class="footer-inner">
        <address class="copyright">© 2014 Espaço Masculino. Todos os direitos reservados.</address>
        <span style='float: right; color: #aaa;'>Desenvolvido por <a href="http://stylusgrafy.com.br/" style='color: #fff;'>StylusGrafy - Marketing e Tecnologia</a></span>
      </div>
    </div>

</div>
</div>
</body></html>