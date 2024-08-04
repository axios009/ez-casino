<!-- <link rel="stylesheet" href="module/page/css/global.css"> -->

<div class="modal fade modal-lobby" id="spinnerModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog">
  <div class="modal-border">
    <div class="modal-content modal-dialog">
      <div class="modal-header-container">
        <div class="modal-header">
          <img src="./assets/icons/icon-back-modal.svg" class="modal-icon-back" alt="" onclick="closeModal('spinnerModal');refreshBalance();">
          <p class="modal-title" id="spinnerModalTitle"><?= L::menu_wheel ?></p>
          <img src="./assets/icons/icon-close-modal.svg" class="modal-icon-close" onclick="closeModal('spinnerModal');refreshBalance();" aria-label="Close" alt="">
        </div>
      </div>
      <div class="modal-body">
        <?php
        $bank = $_SESSION['PROFILE']->info->bankDeposit[0];
        $bankName = $_SESSION["MASTER"]["BANK"][$bank->i_bank]["name"];
        ?>
        <div class="deposit-withdraw-modal-content">
          <div class="row justify-content-center">
            <div class="col-7">
              <h6 class="fs-5 fw-medium mb-0" style="margin-top:2rem;"><?= L::lb_totalPoint ?> : <span id="Ecredit"> <?= number_format($_SESSION["PROFILE"]->balance->cevent) ?> </span></h6>
              <br>
              <input type="hidden" name="eventCode" id="eventCode" value>
              <div id="particles-js"></div>
              <div id="drawing" class="text-center"></div>
              <br>
              <br>
              <div class="mm-table d-block border-pink-light px-2 py-3 rounded-3 mb-4">
                <div class="fs-11 fw-bold border-blue-light p-1 rounded-2 mb-1">
                  <div class="row g-1 text-nowrap">
                    <div class="col text-center"><?= L::lb_detail ?></div>
                  </div>
                </div>
                <p class="fs-10 mb-0"><?= L::remark_wheel1 ?> <span id="i_max"> - </span> <?= L::lb_time ?> </p>
                <p> <?= L::remark_wheel2 ?> <span id="all"> - </span> <?= L::lb_time ?></p>
                <p class="fs-10 mb-0"><?= L::remark_wheel3 ?> <span id="i_per_day"> - </span> <?= L::lb_time ?></p>
                <p class="fs-10 mb-0"><?= L::remark_wheel4 ?> <span id="day"> - </span> <?= L::lb_time ?></p>
              </div>
              <div class="burger-menu d-none">
                <span class="active"></span>
                <span class="active"></span>
                <span class="active"></span>
                <div class="counter">...</div>
              </div>
              <div class="reward-list d-none">
                <div class="items"></div>
              </div>
              <audio id="spinSound" controls="" style="display:none;">
                <source src="./assets/luckyWheel/medias/spinSound.mp3" type="audio/mp3">
              </audio>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
  var logo = './images/betboy/betboy-888-2.png';
  var rewardRecv = "";
  var luckyWheel = true;
  /***************** CLICK AND RECEIVE REWARD EVENTS *****************/
  function spin(c, e) {
    if (!localStorage.getItem("remainTime")) {
      _globalVars.isProcessing = !0;
      turnOffFilters();
      _animation.outerLight.on();
      outerSpin.radius("12%");
      innerSpin.radius("8%");
      spinImage
        .finish()
        .size(140)
        .move(_centerX / 1.23, _centerY / 1.22);
      spinLabel.move("43%", "44%");
      if ("undefined" !== typeof e) {
        0 === e && (e = _globalVars.config.totalSlices);
      } else {
        f = rewardRecv - 1 <= 0 ? 12 : rewardRecv;

        var b = (360 / _globalVars.config.totalSlices) * f;
        switch (parseInt(_globalVars.config.totalSlices)) {
          case 10:
            b -= 3;
            break;
          case 8:
            b -= 8;
            break;
          case 5:
            b -= 20;
        }
        _globalVars.elms.rotateGroup
          .animate(15e3, "circInOut")
          .rotate(-3600 - b)
          .afterAll(function () {
            setTimeout(function () {
              _globalVars.elms.pizza
                .children()
              [f - 1].animate(200)
                .fill("#FFF")
                .loop(15, !0)
                .afterAll(function () {
                  _globalVars.elms.pizza
                    .children()
                  [f - 1].animate(100)
                    .fill(_globalVars.elms.pizzaArr[f - 1].fill)
                    .afterAll(function () {
                      _animation.outerLight.off();
                      outerSpin.radius("14%");
                      innerSpin.radius("10%");
                      spinImage
                        .size(160)
                        .move(_centerX / 1.27, _centerY / 1.26)
                        .animate()
                        .size(140)
                        .move(_centerX / 1.23, _centerY / 1.22)
                        .loop(!0, !0);
                      spinLabel.move("42%", "44%");
                      _globalVars.isProcessing = !1;
                      try {
                        parseInt(f) === _globalVars.jsonData.length && (f = 0);
                        var h = _globalVars.jsonData[f].value;
                        document.getElementById("drawing").setAttribute("value", f);
                      } catch (y) {
                        h = y.toString();
                      }
                      turnOnFilters();
                      c(h);
                    });
                });
            }, 500);
          });
      }
    }
  }

  function loadEvents() {

    // Load reward
    // loadRewardBag();

    // Check Game Rules
    if (document.querySelector('#count-down-timer')) {
      checkGameRules();
    }

    // Spin tap
    _globalVars.elms.spin.click(function () {
      $.ajax({
        type: 'POST',
        url: contextPath + cVersion + '/LuckyWheel/RandomPrize',
        data: { "eventCode": $('#eventCode').val() },
        dataType: 'json',
        cache: false,
        beforeSend: function () {
        },
        success: function (data) {
          if (isSuccess(data)) {
            var res = data.data;
            $('#i_per_day').html(res.i_per_day);
            $('#i_max').html(res.times);
            $('#Ecredit').html(res.point);
            $('#day').html(res.day);
            $('#all').html(res.all);
            $('#Ecredit').html(number_format(res.currentPoint));
            $.each(_globalVars.jsonData, function (i) {
              if (_globalVars.jsonData[i].encrypt === res.id) {
                rewardRecv = i;
              }
            });
            if (!_globalVars.isProcessing) {

              // Play sound if have config
              // if (_dynamicParams.config.allowSound) {
              var spinSound = document.getElementById('spinSound');
              spinSound.play().catch(function () {
              });
              // }

              spin(function (data) {
                $('#descReward').html(data);
                $("#imgReward").attr("src", "data:image/jpg;base64," + _globalVars.jsonData[rewardRecv].imageUrl);
                $('#wheelRewardModal').modal('toggle');
                // Your continue code if have

                // Check if the reward popup component is ready or not. Priority is customer email popup first
                if (document.querySelector('#popup-customer-email') && !document.querySelector('#email-popup-config')) {
                  showPopupEmail();
                } else if (document.querySelector('#daily-lucky') && !document.querySelector('#reward-popup-config')) {
                  showPopup(data);
                }

                // Check condition to show count down timer
                if (document.querySelector('#count-down-timer')) {

                  var playTimes = localStorage.getItem(cachedKey);

                  if (localStorage.getItem(cachedKey)) {
                    playTimes = JSON.parse(localStorage.getItem(cachedKey)).length;
                  } else {
                    playTimes = 0;
                  }

                  if (typeof (_dynamicParams.countdownConfig) !== 'undefined') {

                    if ((parseInt(playTimes) % parseInt(_dynamicParams.countdownConfig.timesToShowCountDown)) === 0) {

                      var currentDate = new Date();
                      var remainTime = currentDate.setHours(currentDate.getHours() + parseInt(_dynamicParams.countdownConfig.remainTime));
                      localStorage.setItem('remainTime', remainTime);

                      showCountDownTime();

                    }

                  }

                }

              });

            }
          }
          notify(data);
        }
      });
    });
  }

  //   if (localStorage.getItem("remainTime")) {
  //     return;
  //   }

  //   if (!_globalVars.isProcessing) {


  //     // Play sound if have config
  //     if (_dynamicParams.config.allowSound) {
  //       var spinSound = document.getElementById('spinSound');
  //       spinSound.play().catch(function () {
  //       });
  //     }

  //     spin(function (data) {

  //       // Spin complete animation and receive reward
  //       console.log(data);

  //       // Save reward into reward bag
  //       saveReward(data);

  //       // Your continue code if have
  //       showPopup(data);

  //       // Check condition to show count down timer
  //       if (document.querySelector('#count-down-timer')) {

  //         var playTimes = localStorage.getItem(cachedKey);

  //         if (localStorage.getItem(cachedKey)) {
  //           playTimes = JSON.parse(localStorage.getItem(cachedKey)).length;
  //         } else {
  //           playTimes = 0;
  //         }

  //         if (typeof (_dynamicParams.countdownConfig) !== 'undefined') {

  //           if ((parseInt(playTimes) % parseInt(_dynamicParams.countdownConfig.timesToShowCountDown)) === 0) {

  //             var currentDate = new Date();
  //             var remainTime = currentDate.setHours(currentDate.getHours() + parseInt(_dynamicParams.countdownConfig.remainTime));
  //             localStorage.setItem('remainTime', remainTime);

  //             showCountDownTime();

  //           }

  //         }

  //       }

  //     });

  //   }

  // });

  // Redeem listener
  // document.addEventListener('onRedeemCompleted', function (data) {

  //   // data.rewardValue => The reward value of user after finish spin the wheel.
  //   console.log(data.rewardValue);

  // }, false);

  // // Burger Menu tap
  // var burgerMenu = document.querySelector('.burger-menu');
  // burgerMenu.addEventListener('click', function (event) {
  //   burgerMenu.children[0].classList.toggle('active');
  //   burgerMenu.children[0].classList.toggle('cross');
  //   burgerMenu.children[1].classList.toggle('active');
  //   burgerMenu.children[1].classList.toggle('cross');
  //   burgerMenu.children[2].classList.toggle('hide');

  //   // Show or hide reward list
  //   document.querySelector('.reward-list').classList.toggle('show');
  // });

  // // Affiliate link click
  // if (document.querySelector('.affiliate-link') !== null) {
  //   document.querySelector('.affiliate-link, .popup-container').addEventListener("click", function (e) {

  //     if (e.target.className.indexOf('popup-container') > -1 ||
  //       e.target.className.indexOf('btn-continue') > -1 ||
  //       e.target.className === '') {
  //       document.querySelector('#daily-lucky').classList.add('hide');

  //       // Call Redirect to the new pafe for each slide data config
  //       redirectAffiliateLink();
  //     }

  //   }, false);
  // }

  // // Access button click
  // if (document.querySelector('#access-key .btn-submit')) {

  //   setTimeout(function () { document.querySelector('#access-key .inner-content').classList.add('active'); }, 500);

  //   document.querySelector('#access-key .btn-submit').addEventListener('click', function (e) {

  //     // Call Verify Access Key
  //     verifyAccess();

  //   }, false);
  // }
  // }

  /*
      Function to show Popup reward 
  */
  function showPopup(data) {
    const luckyWheels = JSON.parse(sessionStorage.getItem("luckyWheel"));
    let rewardValue = null;
    if (luckyWheels && luckyWheels.data.length > 0) {
      if (luckyWheels.data[0].eventItem && luckyWheels.data[0].eventItem.length > 0) {
        luckyWheels.data[0].eventItem.forEach(v => {
          if (data === v.id) {
            rewardValue = v
          }
        });
      }
    }
    if (rewardValue) {
      // console.log(JSON.stringify(rewardValue))
      var imgUrl = "data:image/png;base64," + rewardValue.s_path;
      $("#rewardImage").css({
        "background-image": "url('" + imgUrl + "')",
        "background-repeat": "no-repeat", // Add this line
        "background-size": "cover", // Optional: Adjust the sizing of the background image
        "height": "50vw",
        "width": "50vw",
        "margin-top": "50px",
        "margin-left": "35px"
      });
      $("#rewardDetail").html(rewardValue.s_name);
      $("#wheelRewardModal").modal('show')
    }
  }

  /*
      Function to handle click event for access button click
  */
  function verifyAccess() {

    if (document.querySelector('#access-key .text-box')) {
      try {

        // Get access key value from textbox
        var accessKey = document.querySelector('#access-key .text-box').value;

        // Continue your code to validate access key

        document.querySelector('#access-key').classList.add('hide');

      } catch (ex) { }
    }
  }

  /*
      Three Functions to manage count down timer
  */
  function remainTimeCalc() {

    // Get count down time
    var countDownTime = parseFloat(localStorage.getItem('remainTime'));

    // Get today's date and time
    var now = new Date().getTime();

    // Find the distance between now and the count down date
    var distance = countDownTime - now;

    // Time calculations for days, hours, minutes and seconds
    //var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

    // Display the result in the element with id="demo"
    document.querySelector('.remainTime .hours').innerHTML = hours;

    document.querySelector('.remainTime .minutes').innerHTML = minutes;

    document.querySelector('.remainTime .seconds').innerHTML = seconds;

    // If the count down is finished, write some text
    if (distance < 0) {
      return 1;
    } else {
      return 0;
    }
  }

  function showCountDownTime() {

    document.querySelector('#count-down-timer').classList.remove('hide');

    var isCompleteCountDown = remainTimeCalc();

    // Update the count down every 1 second
    var interval = setInterval(function () {

      isCompleteCountDown = remainTimeCalc();

      // If the count down is finished allow to continue play lucky wheel
      if (isCompleteCountDown) {

        clearInterval(interval);

        document.querySelector('#count-down-timer').classList.add('hide');

        // Remove local localStorage Data
        localStorage.removeItem('remainTime');

      }
    }, 1000);
  }

  function checkGameRules() {

    // Check the reamin time of count down timer
    if (localStorage.getItem('remainTime')) {
      showCountDownTime();
    }
  }

  /*
      Function redirect to new page
  */
  function redirectAffiliateLink() {

    try {
      var currentReward = document.getElementById('drawing').getAttribute('value');
      var currentAffiliateLink = _dynamicParams.jsonData[currentReward].link;;

      if (typeof (currentAffiliateLink) !== 'undefined') {
        window.open(currentAffiliateLink, '_blank');
      }

    } catch (ex) { }
  }

  /*
      Function to validate email and send email
  */
  function validateEmail(elm, value) {
    var re = /^(([^<>()\[\]\.,;:\s@\"]+(\.[^<>()\[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()\.,;\s@\"]+\.{0,1})+[^<>()\.,;:\s@\"]{2,})$/;
    if (re.test(value)) {
      document.querySelector('.btn-send-email').classList.remove('inactive');
    } else {
      document.querySelector('.btn-send-email').classList.add('inactive');
    }
  }

  if (document.querySelector('#popup-customer-email')) {
    document.querySelector('.btn-send-email').addEventListener('click', function (e) {

      if (document.querySelector('.btn-send-email').className.indexOf('inactive') === -1) {
        sendEmail();
      }

    }, false);
  }
  /***************** //CLICK AND RECEIVE REWARD EVENTS *****************/
</script>