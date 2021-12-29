var JFL_211958944889075 = new JotformFeedback({
          formId: '211958944889075',
          base: 'https://form.jotform.com/',
          windowTitle: 'Formulir',
          background: '#f5a623',
          fontColor: '#FFFFFF',
          type: '1',
          height: 900,
          width: 400,
           openOnLoad:true
          
        });
    
    
    var delayseconds = 5;
    
    window.onload = closeLightbox();
    
    function closeLightbox() {
    
    setTimeout(function(){document.querySelector('.jt-dimmer').click();}, delayseconds*5000);
    
    
    
    });
