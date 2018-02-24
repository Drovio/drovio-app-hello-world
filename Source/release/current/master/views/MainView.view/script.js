jq = jQuery.noConflict();
jq(document).one("ready", function() {

	// Javascript listener
	jq(document).on("click", ".HelloWorldApplication .action.act_js", function() {
		// Create log
		HelloWorld.createLog("JavaScript action event created.");
	});
	
	// Action listener
	jq(document).on("add_log", function(ev, content) {
		// Create log
		HelloWorld.createLog(content);
	});
	
	// Clear log
	jq(document).on("click", ".HelloWorldApplication .app_log_clear", function() {
		HelloWorld.clearLog();
	});
});

HelloWorld = {
	createLog : function(content) {
		var app_logContainer = jq(".HelloWorldApplication .app_logContainer .body");
		jq("<div />").addClass("logItem").html(content).appendTo(app_logContainer);
	},
	clearLog : function() {
		jq(".HelloWorldApplication .app_logContainer .body").html("");
	}
}