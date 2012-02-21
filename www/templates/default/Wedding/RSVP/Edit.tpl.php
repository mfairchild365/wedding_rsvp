<h2>RSVP</h2>

<div id='content'>
  <p>
  Please take a moment to RSVP to our wedding.  The wedding will start at 11:11am on June 30 2012 at 
  St Marks on the Campus.  After the wedding you are welcome to attend our reception which will 
  also be at St Marks on the Campus.  Please read more details.
  </p>
  
  <p>
  If we invited you as a family or group, please fill out this form for each person in your family 
  or group that is planning on attending the wedding.  Doing so will help us get a more accurate 
  picture of how many people we should expect.
  </p>
  
  <form action="<?php echo Wedding_Controller::$url?>" method="post">
    <fieldset>
      <legend>RSVP</legend>
      <ul>
        <li>
          <label>What is your name? <span class='helper'>Please provide your full name (ex: Michael Fairchild)</span></label>
          <input type="text" name="name"></input>
        </li>
        <li>
          <label>Do you plan on bringing a guest?</label>
          <input type="checkbox" name="guest" value="1"/> Yes
        </li>
        <li>
          <label>Do you plan on attending the reception?</label>
          <input type="checkbox" name="guest" value="1"/> Yes
        </li>
      </ul>
      <input type="hidden" name="_class" value='<?php echo get_class($context->getRawObject()); ?>'/>
      <input type="submit" value="Submit" class='submit' />
    </fieldset>
  </form>
</div>