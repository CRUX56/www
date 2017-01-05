(function($) {

	// $ Works! You can test it with next line if you like
	//console.log('Good Day Mr. Cruz');

  var egg = new Egg();
  egg
  .addCode("up,up,down,down,left,right,left,right,b,a", function() {
    jQuery('#wfc-end-credits').fadeIn(500, function() {
      window.setTimeout(function() { jQuery('#wfc-end-credits').hide(); }, 5000);
    });
  })
  .addHook(function(){
    console.log("Hook called for: " + this.activeEgg.keys);
    console.log(this.activeEgg.metadata);
  }).listen();

})( jQuery );
