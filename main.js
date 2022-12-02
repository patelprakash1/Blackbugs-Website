class MyComponent extends HTMLElement {
    connectedCallback() {
      this.innerHTML = `<section class="footer" >
      <div class="container footer_bg">
          <div class="row">
              <div class="col-lg-3 col-md-6 col-sm-6 col-12 mb-lg-0 mb-md-5 mb-5">
                  <img src="assets/Images/footerlogo.svg"/>
                  <p class="footer_content">236, Tulsi Arcade, Sudama Chowk,Mota Varachha, Surat.-394101</p>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-6 col-12 mb-lg-0 mb-md-5 mb-3">
                  <p><a href="index">Home</a></p>
                  <p><a href="aboutus">About Us</a></p>
                  <p><a href="portfolios">Portfolio</a></p>
                  <p><a href="career">Career</a></p>
                  <p><a href="contactus">Contact</a></p>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-6 col-12 mb-lg-0 mb-md-5 mb-3">
                  <!-- <p><img src="assets/Images/facebook.png" class="me-3"/><a href="#">Facebook</a></p> -->
                  <p><img src="assets/Images/instagram.png" class="me-3"/><a target="_blank" href="https://instagram.com/blackbugs_technologies">Instagram</a></p>
                  <!-- <p><img src="assets/Images/linkedin.png" class="me-3"/><a href="#">Linkedin</a></p> -->
                  <p><img src="assets/Images/upwork.png" class="me-3"/><a target="_blank" href="https://www.upwork.com/ag/blackbugstechnologies">Upwork</a></p>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-6 col-12 mb-lg-0 mb-md-5 mb-3">
                  <p>Phone Number</p>
                  <p><a href="tel:+9176983-76466" class="social_details">+91 76983-76466</a></p>
                  <p>Email</p>
                  <p><a href="mailto:info@blackbugtechnlogies" class="social_details">info@blackbugtechnlogies</a></p>
              </div>
          </div>
          <div class="footer_bar">
              <div class="row justify-content-between">
                  <div class="col-md-6 ">
                      <p class="mb-0 Copyrights mb-sm-0 mb-3">© Copyrights Blackbugs 2022<a></a></p>
                  </div>
                  <!-- <div class="col-md-6">
                      <p class="mb-0 text-lg-end text-md-end"><a href="#" class="me-3">Terms & Conditions</a> <a href="#">Privacy Policy</a></p>
                  </div> -->
              </div>
          </div>
      </div>
  </section>`;
    }
  }
      
  customElements.define('b-footer', MyComponent);

