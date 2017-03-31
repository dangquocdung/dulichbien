@include('layouts.head')
  <body>

    @include('layouts.header')
    @include('layouts.slider')

  <div>
    <div role="main" class="main-container container js-quickedit-main-content nid-6057">
      <div class="row">
        <section class="col-sm-12">
          <a id="main-content"></a>
          <div class="region region-content">
            <article>
              <div class="content">
                <div class="layout-ful-width clearfix">
                  <div class="region-top">
                  </div>
                  <div class="region-bottom">
                    <div class="field field--name-field-widget-bottom field--type-entity-reference field--label-hidden field--items">
                      @include('layouts.deal_package')
                      @include('layouts.seasonal')
                      @include('layouts.event')
                      @include('layouts.hoatdong')
                      @include('layouts.video')
                    </div>
                  </div>
                </div>
              </div>
            </article>
          </div>
        </section>
        <div class="col-sm-12">
          <div class="region region-content-bottom">
            <section id="block-linktop-2" class="block clearfix">
              <div class="field field--name-body field--type-text-with-summary field--label-hidden field--item"><a class="top" href="#main-content">Top</a></div>
            </section>
          </div>
        </div>
      </div>
    </div>
  </div>
  @include('layouts.social_media')
  @include('layouts.footer')
  </div>
</div>

<script type="text/javascript">
  $('.owl-carousel').owlCarousel({
      loop:true,
      margin:100,
      nav:true,
      responsive:{
          0:{
              items:1
          },
          600:{
              items:3
          },
          1000:{
              items:5
          }
      }
  })

</script>
</body>
</html>
