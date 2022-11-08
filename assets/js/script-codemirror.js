
function completeAfter(cm, pred) {
    var cur = cm.getCursor();
    if (!pred || pred()) setTimeout(function() {
      if (!cm.state.completionActive)
        cm.showHint({completeSingle: false});
    }, 100);
    return CodeMirror.Pass;
  }


  var mixedMode = {
    name: "htmlmixed",
    scriptTypes: [{matches: /\/x-handlebars-template|\/x-mustache/i,
                   mode: null},
                  {matches: /(text|application)\/(x-)?vb(a|script)/i,
                   mode: null}]
  };



let dvObjectCodeMirror = function(mode){
  return  {
      mode: mode,
      lineNumbers: true,
      tabSize: 4,
      indentUnit: 4,
      indentWithTabs: true,
      
      showTrailingSpace: true,
      styleActiveLine: true,
      matchBrackets: true,
      theme: 'xq-dark',
      autoCloseBrackets: true,
      autoCloseTags: true,
      colorpicker : true,

      extraKeys: {
          'Ctrl-S' : function(cm){
              document.querySelector('#publish').click();
          },
          "Ctrl-Space": "autocomplete",
          // "'<'": completeAfter,
          
          "'`'": completeAfter,
          "'1'": completeAfter,
          "'2'": completeAfter,
          "'3'": completeAfter,
          "'4'": completeAfter,
          "'5'": completeAfter,
          "'6'": completeAfter,
          "'7'": completeAfter,
          "'8'": completeAfter,
          "'9'": completeAfter,
          "'0'": completeAfter,
          "'-'": completeAfter,
          "'='": completeAfter,
      
          "'q'": completeAfter,
          "'w'": completeAfter,
          "'e'": completeAfter,
          "'r'": completeAfter,
          "'t'": completeAfter,
          "'y'": completeAfter,
          "'u'": completeAfter,
          "'i'": completeAfter,
          "'o'": completeAfter,
          "'p'": completeAfter,
          "'['": completeAfter,
          "']'": completeAfter,
          "'\\'": completeAfter,
          "'a'": completeAfter,
          "'s'": completeAfter,
          "'d'": completeAfter,
          "'f'": completeAfter,
          "'g'": completeAfter,
          "'h'": completeAfter,
          "'j'": completeAfter,
          "'k'": completeAfter,
          "'l'": completeAfter,
        //   "';'": completeAfter,
          "'\''": completeAfter,
          "'z'": completeAfter,
          "'x'": completeAfter,
          "'c'": completeAfter,
          "'v'": completeAfter,
          "'b'": completeAfter,
          "'n'": completeAfter,
          "'m'": completeAfter,
          "','": completeAfter,
          "'.'": completeAfter,
          "'/'": completeAfter,
          "'Q'": completeAfter,
          "'W'": completeAfter,
          "'E'": completeAfter,
          "'R'": completeAfter,
          "'T'": completeAfter,
          "'Y'": completeAfter,
          "'U'": completeAfter,
          "'I'": completeAfter,
          "'O'": completeAfter,
          "'P'": completeAfter,
          "'A'": completeAfter,
          "'S'": completeAfter,
          "'D'": completeAfter,
          "'F'": completeAfter,
          "'G'": completeAfter,
          "'H'": completeAfter,
          "'J'": completeAfter,
          "'K'": completeAfter,
          "'L'": completeAfter,
          "'Z'": completeAfter,
          "'X'": completeAfter,
          "'C'": completeAfter,
          "'V'": completeAfter,
          "'B'": completeAfter,
          "'N'": completeAfter,
          "'M'": completeAfter,
      
          "'<'": completeAfter,
          "'>'": completeAfter,
          "'?'": completeAfter,
          "':'": completeAfter,
          "'\"'": completeAfter,
          "'{'": completeAfter,
          "'}'": completeAfter,
          "'_'": completeAfter,
          "'_'": completeAfter,
          
      },
  
      foldGutter: true,
      gutters: ["CodeMirror-linenumbers", "CodeMirror-foldgutter"],
    //   lint: true,
      highlightSelectionMatches: {showToken: /\w/, annotateScrollbar: true},
      matchTags: {bothTags: true},
  
  }
} 



dvTextareaCodemirrorHtml = document.querySelectorAll('.dv-textarea-codemirror-html textarea');
dvTextareaCodemirrorHtml.forEach(element => {
    let mode = element.getAttribute('mode')? element.getAttribute('data-mode'): 'text/html'
    CodeMirror.fromTextArea(element,dvObjectCodeMirror(mode));  
});



dvTextareaCodemirrorCss = document.querySelectorAll('.dv-textarea-codemirror-css textarea');
dvTextareaCodemirrorCss.forEach(element => {
    let mode = element.getAttribute('mode')? element.getAttribute('data-mode'): 'text/css'
    CodeMirror.fromTextArea(element,dvObjectCodeMirror(mode));  
});



dvTextareaCodemirrorJs = document.querySelectorAll('.dv-textarea-codemirror-js textarea');
dvTextareaCodemirrorJs.forEach(element => {
    let mode = element.getAttribute('mode')? element.getAttribute('data-mode'): 'text/javascript'
    CodeMirror.fromTextArea(element,dvObjectCodeMirror(mode));  
});


dvTextareaCodemirrorJs = document.querySelectorAll('.dv-textarea-codemirror-php textarea');
dvTextareaCodemirrorJs.forEach(element => {
    let mode = element.getAttribute('mode')? element.getAttribute('data-mode'): 'application/x-httpd-php'
    CodeMirror.fromTextArea(element,dvObjectCodeMirror(mode));  
});
