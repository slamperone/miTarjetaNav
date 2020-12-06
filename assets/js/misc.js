$(function () {
      var URL = window.URL || window.webkitURL;
      var $upload = $('#upload');
      var $handle = $('#handle');
      var $file = $('#file');
      var $canvas = $('#canvas');
      var caman;
      var hor,ver,ancho,alto;
      var cual = Math.floor(Math.random() * 1000)


      function startCropper() {

        // Destroy if already initialized
        if ($canvas.data('cropper')) {
          $canvas.cropper('destroy');
        }

        // Initialize a new cropper
        $canvas.cropper({
          crop: function (e) {
            //console.log(e);

            //console.log(e.x);

            alto = e.height
            ancho = e.width
            hor = e.x
            ver = e.y

            //console.log(ancho);
          }
        });
      }

      function startCaman(url) {
        caman = Caman('#canvas', url, function () {
          URL.revokeObjectURL(url);
          //$upload.hide();
          $handle.show();

          startCropper();
        });
      }

      $handle.hide();

      if (URL) {
        $file.change(function () {
          var files = this.files;
          var file;

          if (files && files.length) {
            file = files[0];

            if (/^image\/\w+$/.test(file.type)) {
              startCaman(URL.createObjectURL(file));
            } else {
              window.alert('Puras fotos.');
            }
          }
        });
      } else {
        $file.prop('disabled', true);
      }

      $('#brightness').on('click', function () {
        if (caman) {
          caman.brightness(10).render(startCropper);
        }
      });

      $('#contrast').on('click', function () {
        if (caman) {
          caman.contrast(5).render(startCropper);
        }
      });

      $('#reset').on('click', function () {
        if (caman) {
        caman.revert(false);
        caman.render();
        console.log('dadada')

        }
      });



      $('#save').click(function() {

        micual = cual++

        var bg = $('.cropper-canvas img').attr('src');

        $('#temporal').html('<img id="ora'+micual+'" src="' + bg + '" />')
        //console.log('uno');

          Caman("#ora"+micual, function() {
              this.crop(ancho, alto, hor, ver);
              this.render(function() {
              var image = this.toBase64();

      //window.open(image);

      $('#cortadas').append('<img id="'+micual+'" src="' + image + '" />')

      $('#cortadas img').draggable()


      
    });

          });
      });

    });