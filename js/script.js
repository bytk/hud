             /* speed */
             $(document).ready(function() {
                navigator.geolocation.watchPosition(function(e){
                    $(".speed").text(parseInt(e.coords.speed * 3.6));
                    var speed = parseInt(e.coords.speed * 3.6);
                    $( ".progressbar" ).progressbar({
                        value: 65,//speed,
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
                            $("#test1").css("background","red");
                        }
                        if (amount >= 60) {
                            $("#test2").css("background","aqua");
                        }
                        if (amount >= 90) {
                            $("#test3").css("background","green");
                        }
                    }
        
              

                }, function(e) {}, { enableHighAccuracy: true, maximumAge: 30000 });
    

            });
        