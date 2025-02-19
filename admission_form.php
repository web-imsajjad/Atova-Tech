<!DOCTYPE html>
<html lang="en">
  
  <?php $pageTitle= 'Admission Form'; 
  include('./module/head.php') ?>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@24.8.1/build/css/intlTelInput.css">

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>

<body>

<div class="main-wrapper">
  <?php include('./module/header.php')?>

   <form action="http://localhost:8000/register-admission" method="POST" enctype="multipart/form-data">
      <h3 class="title text-center container mt-4"><span style="color: #FF555B;">Admission</span> Form</h3>

      <div class="stepper container formContainer">
        <div class="stepper-line"></div>
        <div class="progress-bar" id="progressBar"></div>
        <div class="step-number active">1</div>
        <div class="step-number">2</div>
        <div class="step-number">3</div>
        <div class="step-number">4</div>
      </div>
      
      
      <div class="center-container container">
        <img class="shapeImg1 graphImg formc" src="./assets/images/admission_Img/Noodle 1.png" alt="">
        <img class="shapeImg2 graphImg" src="/assets/images/admission_Img/Noodle 2.png" alt="">

          <div id="multi-step-form">

            <div class="row formItem">
              <div class="container wrapper formContainer col-sm-12 step active-step">
                <h5 class="title text-center">Course and Account</h5>
          
                <div class=" col-sm-12 courseSelect " id="courseSelect" style="margin-bottom: 40px;">
                  <div class="input-data">
                    <h6>Select Your Course <span class="starIcon" style="color: red;">*</span></h6>
                    <select name="course" id="co urse" required class="select2Plugin">
                      <option value="" selected hidden>Select one ⬇️</option>
                      <option value="4">Web Development with PHP</option>
                      <option value="3">Certified ML Engineer</option>
                      <option value="2">Certified AI Engineering</option>
                    </select>
                  </div>
                </div>
          
                <div class="col-sm-12">
                  <div class="input-data">
                    <input type="email" required>
                    <div class="underline"></div>
                    <label>Email <span class="starIcon" style="color: red;">*</span></label>
                  </div>
                </div>
          
                <div class="col-sm-12">
                  <div class="input-data">
                    <input type="password" required id="passwordField" oninput="maskPassword(this)">
                    <div class="underline"></div>
                    <label>
                      Account Password <span class="starIcon" style="color: red;">*</span>
                    </label>
                    <span>
                      <i id="toggleIcon" class="ri-eye-off-fill" id="toggleIcon"></i>
                    </span>
                  </div>
                </div>
          
          
                <div class="col-sm-12">
                  <div class="input-data">
                    <input type="password" required id="confirmPasswordField" oninput="maskPassword(this)">
                    <div class="underline"></div>
                    <label>
                      Confirm Password <span class="starIcon" style="color: red;">*</span>
                    </label>
                    <span>
                      <i id="confirmToggleIcon" class="ri-eye-off-fill" id="toggleIcon"></i>
                    </span>
                  </div>
                </div>
                <div class="input-data button-group mt-5">
                  <button class="rn-btn edu-btn w-50 btn-next" style="align-self: center;" type="button">Next</button>
                </div>
              </div>
            </div>
            <!-- Personal Information -->
          
            <div class="container wrapper other-steps formContainer col-sm-12 step">
              <div class="row formItem">
          
                <h5 class="title text-center">Personal Information</h5>
          
                <div class="col-sm-12">
                  <div class="input-data">
                    <input type="text" required>
                    <div class="underline"></div>
                    <label>Name <span class="starIcon" style="color: red;">*</span></label>
                  </div>
                </div>
          
                <div class="col-sm-12">
                  <div class="tel-data row">
                    <label>Contact Number <span class="starIcon" style="color: red;">*</span></label>
                    <input type="tel" class="phone">
                  </div>
                </div>
          
                <div class="col-sm-12">
                  <div class="tel-data row">
                    <label>Emergency Contact Number <span class="starIcon" style="color: red;">*</span></label>
                    <input type="tel" class="phone">
                  </div>
                </div>
          
                <div class="col-sm-12">
                  <div class="profession-box">
                    <h6>Profession <span class="starIcon" style="color: red;">*</span></h6>
                    <div class="profession-option">
          
                      <div class="profession">
                        <input type="radio" id="check-student" name="profession" checked>
                        <label for="check-student">Student</label>
                      </div>
          
                      <div class="profession">
                        <input type="radio" id="check-businessMan" name="profession">
                        <label for="check-businessMan">Business Man</label>
                      </div>
                      <div class="profession">
                        <input type="radio" id="check-serviceHolder" name="profession">
                        <label for="check-serviceHolder">Service Holder</label>
                      </div>
          
                      <div class="profession">
                        <input type="radio" id="check-others-profession" name="profession">
                        <label for="check-others-profession">Others</label>
                      </div>
          
                    </div>
                  </div>
                </div>
          
                <div class="col-sm-12">
                  <div class="input-data">
                    <input type="text" required>
                    <div class="underline"></div>
                    <label>Educational Institute or Company Name <span class="starIcon" style="color: red;">*</span></label>
                  </div>
                </div>
          
                <div class="col-sm-12">
                  <div class="input-data">
                    <input type="text" required>
                    <div class="underline"></div>
                    <label>Location or Address <span class="starIcon" style="color: red;">*</span></label>
                  </div>
                </div>
          
                <div class="col-sm-12">
                  <div class="input-data">
                    <input type="date" id="date-input" required>
                    <div class="underline"></div>
                    <label>Date of Birth <span class="starIcon" style="color: red;">*</span></label>
                  </div>
                </div>
          
                <div class=" col-blood-group col-sm-7" id="bloodSelect">
                  <div class=" blood_group">
                    <h6 class="bloodSelect">Select Your Blood Group <span class="starIcon" style="color: red;">*</span></h6>
                    <select name="blood_group" id="bloodGroup" class="select2Plugin">
                      <!-- <option value="">Select ⬇️</option> -->
                      <option value="" selected hidden style="color: red;">Select one </option>
                      <option value="AB+">AB+</option>
                      <option value="AB-">AB-</option>
                      <option value="A-">A-</option>
                      <option value="B-">B-</option>
                      <option value="A+">A+</option>
                      <option value="B+">B+</option>
                      <option value="O-">O-</option>
                      <option value="O+">O+</option>
                    </select>
                  </div>
                </div>
          
                <div class="col-sm-5 col-gender">
                  <div class="gender-box">
                    <h6>Gender <span class="starIcon" style="color: red;">*</span></h6>
                    <div class="gender-option">
          
                      <div class="gender">
                        <input type="radio" id="check-male" name="gender" checked>
                        <label for="check-male">Male</label>
                      </div>
          
                      <div class="gender">
                        <input type="radio" id="check-female" name="gender">
                        <label for="check-female">Female</label>
                      </div>
          
                      <div class="gender">
                        <input type="radio" id="check-others" name="gender">
                        <label for="check-others">Others</label>
                      </div>
          
                    </div>
                  </div>
                </div>
          
                <div class="row mb-4 button-group justify-content-between mt-5">
                  <button type="button" class="rn-btn edu-btn w-25 btn-prev">Previous</button>
                  <button class="rn-btn edu-btn w-25 btn-next" type="button">Next</button>
                </div>
          
              </div>
            </div>
          
            <!-- identity -->
          
            <div class="container wrapper other-steps formContainer col-lg-12 step ">
              <div class="row formItem">
                <h5 class="title text-center">Upload Identity</h5>
          
                <div class="col-sm-12">
                  <div class="input-data">
                    <input type="file" id="file-upload" class="file-upload-button" accept=".pdf, .jpg, .jpeg, .png"
                      name="file-upload" required>
                    <div class="underline"></div>
                    <label for="personalPhoto">Upload Your Photo <span class="starIcon" style="color: red;">*</span><i
                        class="ri-folder-image-line" style="color: #000; font-size: 20px; margin-left:10px;"></i></label>
                  </div>
                </div>
          
                <div class="col-sm-12">
                  <div class="input-data">
                    <input type="file" id="file-upload" class="file-upload-button" accept=".pdf, .jpg, .jpeg, .png"
                      name="file-upload" required>
                    <div class="underline"></div>
                    <label for="nidPassportBrc">Upload NID/Passport/BRC <span class="starIcon" style="color: red;">*</span><i
                        class="ri-folder-image-line" style="color: #000; font-size: 20px; margin-left:10px;"></i></label>
                  </div>
                </div>
          
                <div class="col-sm-12">
                  <div class="input-data">
                    <input type="number" required>
                    <div class="underline"></div>
                    <label for="nidPassportBrcNumber">Passport/NID/BRC Number <span class="starIcon"
                        style="color: red;">*</span></label>
                  </div>
                </div>
          
                <div class="row mb-4 button-group justify-content-between mt-5">
                  <button type="button" class="rn-btn edu-btn w-25 btn-prev">Previous</button>
                  <button class="rn-btn edu-btn w-25 btn-next" type="button">Next</button>
                </div>
          
              </div>
            </div>
          
            <!-- Payment Details -->
          
            <div class="col-lg-6 container wrapper other-steps formContainer step ">
              <div class="admission-page-style">
                <div class="payment-details">
                  <h5 class="title text-center">Payment Details</h5>
                  <div class="row align-items-center">
                    <div class="col-lg-12">
                      <div class="checkout-page-style">
                        <div class="row mb-4">
                          <label class="col-sm-7 col-form-label">Course Fee</label>
                          <div class="col-sm-5">
                            <span>BDT</span> <span id="span_subtotal">0.00</span>
                            <input type="hidden" id="subtotal" name="subtotal" value="">
                          </div>
                        </div>
          
                        <div class="row mb-4">
                          <label class="col-sm-7 col-form-label">Payable Amount</label>
                          <div class="col-sm-5">
                            <span>BDT</span> <span id="span_payable_amount">0.00</span>
                            <input type="hidden" id="payable_amount" name="payable_amount" value="">
                          </div>
                        </div>
          
                        <div class="row mb-4" style="margin-top: 20px;">
                          <label class="col-sm-7 col-form-label">Select Payment Method</label>
                          <div class="col-sm-5">
                            <select style="height: 40px; margin-top: -20px;" name="payment_method" id="payment_method">
                              <option value="">Select One</option>
                              <option is_mfs="0" value="1">Office Cash</option>
                              <option is_mfs="1" value="2">Bkash</option>
                              <option is_mfs="1" value="3">Rocket</option>
                              <option is_mfs="0" value="4">SSLCOMMERZ</option>
                              <option is_mfs="0" value="5">Bkash Test</option>
                              <option is_mfs="0" value="6">Bkash Merchant</option>
                              <option is_mfs="0" value="7">ShurjaPay</option>
                            </select>
                          </div>
                        </div>
          
                        <div class="row mb-4 d-none" id="transaction_section">
                          <label class="col-sm-7 col-form-label">Transaction No</label>
                          <div class="col-sm-5">
                            <input style="height: 40px" type="text" name="transaction_no" placeholder="TRXXXXXXX" value=""
                              id="transaction_no">
                          </div>
                        </div>
          
                        <div class="row mb-4">
                          <div class="input-group">
                            <input style="height: 40px; border-radius: 5px; " type="text" id="coupon_code" name="coupon_code"
                              placeholder="Coupon Code" value="">
                            <div class="read-more-btn">
                              <a class="btn-transparent" id="coupon_applied_button"
                                style="font-size: 15px;cursor:pointer; position: absolute; top: 5px; right: 40px;"
                                tabindex="0">Click For
                                Apply Coupon</a>
                            </div>
                          </div>
                          <input type="hidden" name="coupon_amount" id="coupon_amount" value="">
                        </div>
          
                        <div class="row mb-4 col-sm-12">
                          <div class="comment-form-consent input-box col-sm-5">
                            <input id="partial_payment_request" type="checkbox" name="partial_payment_request">
                            <label for="partial_payment_request">Want partial payments?</label>
                          </div>
          
                          <!-- Initally hide -->
          
                          <div class=" col-sm-7 d-flex align-items-center partial-amount-field    d-none ">
                            <label class="col-form-label ">Enter your amount</label>
                            <div class=" partial-payment-amount">
                              <input type="text" name="payment_amount" placeholder="0.00" value="" id="payment_amount">
                              <span class="text-danger" id="payment_amount_error"></span>
                            </div>
                          </div>
                        </div>
          
                        <div class="row mb-4 button-group justify-content-between mt-5">
                          <button type="button" class="rn-btn edu-btn w-25 btn-prev">Previous</button>
                          <button type="submit" class="rn-btn edu-btn w-25 btn-submit">Submit</button>
                        </div>
          
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>
    </form>

  <?php include('./module/footer.php') ?>
</div>

<?php include('./module/scroll_to_top.php') ?>


  <?php include('./module/common_js.php')?>
  <script src="https://cdn.jsdelivr.net/npm/intl-tel-input@24.8.1/build/js/intlTelInput.min.js"></script>
 <script>
 (function () {
  
    document.addEventListener("DOMContentLoaded", () => {
      // File input change event delegation
      document.querySelectorAll('input[type="file"]').forEach((fileInput) => {
        fileInput.addEventListener('change', () => {
          fileInput.classList.toggle('file-selected', fileInput.files.length > 0);
        });
      });
      // password functionality 
     document.addEventListener('click', (e) => {
        const target = e.target;
        if (target.matches('.password-input')) {
          target.closest('.password-field').querySelector('.toggle-password').style.display = 'block'; // Show icon on focus
        } else if (!target.closest('.password-field')) {
          document.querySelectorAll('.toggle-password').forEach(icon => {
            icon.style.display = 'none';
          });
        }
        if (target.matches('.toggle-password')) {
          const input = document.getElementById(target.dataset.toggle);
          input.type = input.type === "password" ? "text" : "password";
          target.classList.toggle("ri-eye-off-fill");
          target.classList.toggle("ri-eye-fill");
        }
      });

      // Initialize intl-tel-input for phone fields
      document.querySelectorAll('.phone').forEach(input => {
        window.intlTelInput(input, {
          loadUtilsOnInit: "https://cdn.jsdelivr.net/npm/intl-tel-input@24.8.1/build/js/utils.js",
          initialCountry: "bd",
        });

        input.addEventListener('focus', () => input.style.borderColor = '#231F40');
        input.addEventListener('input', () => input.classList.toggle('has-data', input.value.trim() !== ''));
      });

      // Initialize select2 plugin
      $('.select2Plugin').select2({
        placeholder: '--Select one--',
      }).on('select2:select', function () {
        const selection = $(this).siblings('.select2-container').find('.select2-selection');
        selection.css('border-color', '#01274C').addClass('selected');
        selection[0].offsetHeight; // Force reflow for Firefox compatibility
      });

      // Date input filled state
      document.getElementById('date-input')?.addEventListener('input', (event) => {
        event.target.classList.toggle('filled', event.target.value !== '');
      });

      // Function to handle screen size changes with debounce (optimized)
      let resizeTimeout;
      const handleScreenSizeChange = () => {
        if (resizeTimeout) clearTimeout(resizeTimeout);

        resizeTimeout = setTimeout(() => {
          const courseSelect = document.getElementById('courseSelect');
          const bloodGroup = document.getElementById('bloodSelect');

          if (window.innerWidth < 576) {
            courseSelect.classList.replace('col-sm-12', 'col-sm-6');
            bloodGroup.classList.replace('col-sm-3', 'col-sm-6');
          } else {
            courseSelect.classList.replace('col-sm-6', 'col-sm-12');
            bloodGroup.classList.replace('col-sm-6', 'col-sm-3');
          }
        }, 10); 
      };

      window.addEventListener('resize', handleScreenSizeChange);
      handleScreenSizeChange(); 

       const Stepper = (() => {
        const DOM = {
          steps: document.querySelectorAll(".step") || [],
          nextButtons: document.querySelectorAll(".btn-next") || [],
          prevButtons: document.querySelectorAll(".btn-prev") || [],
          stepNumbers: document.querySelectorAll(".step-number") || [],
          progressBar: document.getElementById("progressBar") || document.createElement("div")
        };

        // Check for initially active step
        let currentStepIndex = Array.from(DOM.steps).findIndex(step => step.classList.contains("active-step"));
        currentStepIndex = currentStepIndex >= 0 ? currentStepIndex : 0;

        const totalSteps = DOM.steps.length;
        const progressStep = totalSteps > 1 ? 100 / (totalSteps - 1) : 0;

        document.addEventListener("click", (event) => {
          if (event.target.closest(".btn-next")) handleNext();
          if (event.target.closest(".btn-prev")) handlePrev();
        });

        const handleNext = () => {
          if (validateStep() && currentStepIndex < totalSteps - 1) {
            currentStepIndex++;
            updateDisplay();
          }
        };

        const handlePrev = () => {
          if (currentStepIndex > 0) {
            currentStepIndex--;
            updateDisplay();
          }
        };

        const updateDisplay = () => {
          requestAnimationFrame(() => {
            DOM.steps.forEach((step, i) => {
              step.classList.toggle("active-step", i === currentStepIndex);
              step.setAttribute("aria-hidden", i !== currentStepIndex);
            });

            DOM.stepNumbers.forEach((step, i) => {
              const active = i <= currentStepIndex;
              step.classList.toggle("active", active);
              step.setAttribute("aria-current", i === currentStepIndex);
            });

            // Ensure progress is between 0 and 100
            const progress = Math.min(Math.max(currentStepIndex * progressStep, 0), 100);
            DOM.progressBar.style.width = `${progress}%`;
          });
        };

        const validateStep = () => {
          let allValid = true;
          const inputs = DOM.steps[currentStepIndex]?.querySelectorAll("input") || [];

          inputs.forEach(input => {
            const isValid = input.checkValidity();
            input.classList.toggle("input-invalid", !isValid);
          });

          return allValid;
        };

        updateDisplay();

        return {
          goToStep: (index) => {
            if (index >= 0 && index < totalSteps) {
              currentStepIndex = index;
              updateDisplay();
            }
          },
          currentStep: () => currentStepIndex
        };
      })();

    

    });

    // jQuery initialization (for select2)
    $(document).ready(function () {
      $("#course, #bloodGroup").select2();
    });

  })();


</script>

</body>
</html>

