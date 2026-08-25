<?php $page_url = str_replace('/','',$_SERVER['REQUEST_URI']);    
	if($page_url  != 'features.html' && $page_url  != 'taxi-booking-and-dispatching.html' && $page_url  != 'vehicle-assistance.html' && $page_url  != 'delivery-assistance.html')  // && $page_url  != 'features.html'
{?>   
<div class="about_outer">
	<div class="about_baner">
		<img src="<?php echo URL_BASE;?>public/images/about_bg.png" alt="images"/>
	</div> 
	<div class="about_inner">
		<div class="about_common">
			<div class="about_left">
				<h1><?php if(isset($cmscontent)){echo ucfirst($cmscontent[0]['menu']);}?></h1>
			</div>                                
		</div>
	</div>
</div> 
<?php } ?>

<div class="clearfix">
	<?php
		$pagecontent = (isset($cmscontent[0]['content']))?$cmscontent[0]['content']:'';
		if($pagecontent != ''){
		echo $pagecontent;
	} else { ?>
		<h2 class="no_data_found"><?php echo __('no_data'); ?></h2>
	<?php  } ?>                   
</div>

  <script type="text/javascript">
    $(function(){
    
      var $container = $('#container');
    
      $container.isotope({
        masonry: {
          columnWidth: 30
        },
        sortBy: 'number',
        getSortData: {
          number: function( $elem ) {
            var number = $elem.hasClass('element') ? 
              $elem.find('.number').text() :
              $elem.attr('data-number');
            return parseInt( number, 10 );
          },
          alphabetical: function( $elem ) {
            var name = $elem.find('.name'),
                itemText = name.length ? name : $elem;
            return itemText.text();
          }
        }
      });
    
      
      var $optionSets = $('#options .option-set'),
          $optionLinks = $optionSets.find('a');

      $optionLinks.click(function(){
        var $this = $(this);
        // don't proceed if already selected
        if ( $this.hasClass('selected') ) {
          return false;
        }
        var $optionSet = $this.parents('.option-set');
        $optionSet.find('.selected').removeClass('selected');
        $this.addClass('selected');
  
        // make option object dynamically, i.e. { filter: '.my-filter-class' }
        var options = {},
            key = $optionSet.attr('data-option-key'),
            value = $this.attr('data-option-value');
        // parse 'false' as false boolean
        value = value === 'false' ? false : value;
        options[ key ] = value;
        if ( key === 'layoutMode' && typeof changeLayoutMode === 'function' ) {
          // changes in layout modes need extra logic
          changeLayoutMode( $this, options )
        } else {
          // otherwise, apply new options
          $container.isotope( options );
        }
        
        return false;
      });


    
      // Sites using Isotope markup
      var $sites = $('#sites'),
          $sitesTitle = $('<h2 class="loading">&nbsp;</h2>'),
          $sitesList = $('<ul class="clearfix"></ul>');
        
      $sites.append( $sitesTitle ).append( $sitesList );

      $sitesList.isotope({
        layoutMode: 'cellsByRow',
        cellsByRow: {
          columnWidth: 290,
          rowHeight: 400
        }
      });
    
      var ajaxError = function(){
        $sitesTitle.removeClass('loading').addClass('error')
          .text('Could not load sites using Isotope :(');
      };
    
      // dynamically load sites using Isotope from Zootool
      $.getJSON(''+''+'')
        .error( ajaxError )
        .success(function( data ){

          // proceed only if we have data
          if ( !data || !data.length ) {
            ajaxError();
            return;
          }
          var items = [],
              item, datum;

          for ( var i=0, len = data.length; i < len; i++ ) {
            datum = data[i];
            item = '<li><a href="' + datum.url + '">'
              + '<img src="' + datum.image.replace('/l.', '/m.') + '" />'
              + '<b>' + datum.title + '</b>'
              + '</a></li>';
            items.push( item );
          }
        
          var $items = $( items.join('') )
            .addClass('example');
            
          // set random number for each item
          $items.each(function(){
            $(this).attr('data-number', ~~( Math.random() * 100 + 15 ));
          });
        
          $items.imagesLoaded(function(){
            $sitesTitle.removeClass('loading').text('Sites using Isotope');
            $container.append( $items );
            $items.each(function(){
              var $this = $(this),
                  itemHeight = Math.ceil( $this.height() / 120 ) * 120 - 10;
              $this.height( itemHeight );
            });
            $container.isotope( 'insert', $items );
          });
        
        });
    
    
    });
  </script>