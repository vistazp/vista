// ----------------------------------------------------------------------------
// markItUp!
// ----------------------------------------------------------------------------
// Copyright (C) 2011 Jay Salvat
// http://markitup.jaysalvat.com/
// ----------------------------------------------------------------------------
// Html tags
// http://en.wikipedia.org/wiki/html
// ----------------------------------------------------------------------------
// Basic set. Feel free to add more tags
// ----------------------------------------------------------------------------
var mySettings = {
  nameSpace:          'markdown', // Useful to prevent multi-instances CSS conflict
  onShiftEnter:       {keepDefault:false, openWith:'\n\n'},
  markupSet: [
    {name:'Bold', key:"B", openWith:'**', closeWith:'**'},
    {name:'Italic', key:"I", openWith:'_', closeWith:'_'},
    {separator:'---------------' },
    {name:'Bulleted List', openWith:'- ' },
    {name:'Numeric List', openWith:function(markItUp) {
      return markItUp.line+'. ';
    }}
  ]
}
var miu = {
    markdownTitle: function(markItUp, char) {
        heading = '';
        n = $.trim(markItUp.selection||markItUp.placeHolder).length;
        for(i = 0; i < n; i++) {
            heading += char;
        }
        return '\n'+heading+'\n';
    }
}