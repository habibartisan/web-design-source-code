<?php


   <button class="btn btn-primary" data-toggle="modal" data-target="#contactModal">Contact Us</button>




  <!-- CONTACT US MODAL -->
  
  <div class="modal" id="contactModal">
    <div class="container">
      <div class="modal-dialog">
        <div class="modal-content bg-dark">
          <div class="modal-header">
            <h3>Contact Us</h3>
            <button class="close text-light" data-dismiss="modal">&times;</button>
          </div>
          <div class="modal-body">
            <form action="https://formspree.io/codermoshiur@gmail.com" method="POST">
              <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" class="form-control" name="Name">
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="Email" class="form-control">
              </div>
              <div class="form-group">
                <label for="message">Message</label>
                <textarea name="Message" id="message" class="form-control" ></textarea>
              </div>
              <input type="submit" value="Send" class="btn btn-primary">
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

?>