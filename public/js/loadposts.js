    // Get Categories
    var request = $.ajax('http://localhost/OptimizerStudio/SalePoint/public/getPosCategory', {})
    request.done(function (data) {

        //Fetch  Data
        $.each(data.posCategories, function (key, category) {

          // Append Category View
          $('.category-list')
            .append('<span class="category-button col-lg-3 col-md-3 col-sm-6 col-xs-6 tabCategory" ' +
              'data-category-id="' + category.id + '" >' +
              category.name +
              '</span>');

          //Append category products content
          $('#product-content').append('<div id="' + category.id + '" class="tabcontent"> </div>');

          template = $('<div></div>');
          template.load('inc/product.html', function () {

            //get products of each category
            var req = $.ajax('http://localhost/OptimizerStudio/SalePoint/public/getProductCategory/' + category.id, {});

            req.done(function (data) {
                // Fetch Products
                $.each(data.productCategory, function (key, productCateg) {

                  $.data(dataDiv, "product" + productCateg.id, {
                    id: productCateg.id,
                    name: productCateg.name,
                    price: productCateg.list_price
                  });

                  var product = template.find('#col-product').clone();

                  product.find('#productId').val(productCateg.id);

                  product.find('#price').text(currency + productCateg.list_price);

                  product.find('#name').text(productCateg.name);

                  // console.log(product.find('img'))
                  product.find('img').attr('src', 'data:image/jpeg;base64,' + productCateg.image_small);

                  if ($("#xsDiv").is(':visible')) {

                    $('.open-popup').magnificPopup({
                      type: 'inline',
                      midClick: true,
                      mainClass: 'mfp-with-zoom'

                    });

                    //add a class To a Link in
                    $('#product-content').append(product);
                    $('.card').parent('a').removeClass('addProduct');
                    $('.card').parent('a').addClass('open-popup');

                  }

                  $('#product-content').find('div#' + productCateg.categ_id).append(product)

                }); //End CAtegory Each



              }) //End Done
              .fail(function (data) {
                console.log('append products fail : ' + data);
              }); //End Fail
          }); //End Load


        }) //EndCategory Each
      }) //End Done
      .fail(function (data) {
        console.log('append categories fail : ' + data)
      }); //End Fail