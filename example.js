
/**
 * @file
 * Example JS file
 * 
 * Pay attention to:
 *    - comments
 *    - brackets and new lines in if/for/while/switch statements
 *    - single quotes
 *    - spacing between the characters
 *
 * See: guidelines/js.md
 *
 * Created by: Topsitemakers
 * http://www.topsitemakers.com/
 */
$(document).ready(function(){
  
  /**
   * Code block explanation
   */
  var sample   = false,
      test     = true,
      variable = 'Test';
  $('#first-selector').click(function(){
    // Comments inside code block
    if (sample) {
      $('#second-selector').hide();
    }
    else {
      if (test) {
        $('#third-selector').show();
      }
      else {
        $('#fourth-selctor').hide();
      }
    }
    console.log('Test variable: ' + variable);
  }).mouseover(function(){
    // Chaining
    $(this).next('ul').toggleClass('opened').toggle();
  });

  /**
   * Sample function with arguments
   */
  function sample(arg1, arg2) {
    return arg1 + ' ' + arg2;
  }

});
