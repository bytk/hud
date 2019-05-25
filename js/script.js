             /* speed */
             $(document).ready(function() {
                navigator.geolocation.watchPosition(function(e){
                    $(".speed").text(parseInt(e.coords.speed * 3.6));
                    var speed = parseInt(e.coords.speed * 3.6);
                    $( ".progressbar" ).progressbar({
                        value: speed,
                        max: 100
                    });
        
        
        
                    $("#sld").slider({
                        value: speed,
                        min: 0,
                        max: 100,
                        step: 1,
                        change: function(event, ui) {
                          $("#amount").val(ui.value).trigger("change");
                          // console.log(ui.value);
                            $("#log").append(ui.value + ', ');
                            var el = document.getElementById("log");
                            text = el.textContent || el.innerText;
        
                            console.log(Math.max(text));
                        },
                    });
                    $('input').on('change', showResult);
        
        
                    var showResult = function() {
                    let amount = $("#amount").val();
                        if (amount <= 30) {
                            $("#amount").css("background","red");
                        }
                        if (amount >= 60) {
                            $("#amount").css("background","aqua");
                        }
                        if (amount >= 90) {
                            $("#amount").css("background","green");
                        }
                    }
        
                    /* toggle fullscreen */
                    $('#hud').on('click',function(){
                        if($(this).attr('display-state') == 0) {
                            $(this).attr('display-state', 1);
                            document.body.requestFullscreen();
                        } else {
                            $(this).attr('display-state', 0);
                            document.exitFullscreen();
                        }
                    });


/*
                    $(".switch").click(function() {
                        //$( "#hud" ).toggleClass( "hudon" );
                        if($("#hud").className("hudon") !== 0){
                            $("#hud").addClass("hudon");
                        }else{
                            $("#hud").removeClass("hudon");
                        }
                    });*/
                    $( ".switch" ).click(function() {
                        $( "#hud.gt-hud" ).toggleClass( "hudon" );
                      });

                }, function(e) {}, { enableHighAccuracy: true, maximumAge: 30000 });


            });
        