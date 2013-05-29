<!DOCTYPE HTML PUBLIC '-//W3C//DTD HTML 4.01 Transitional//EN'
'http://www.w3.org/TR/html4/loose.dtd'>

<html lang='en'>
  <head>
  
    <title>Online Basic Program Interpreter</title>
    <meta http-equiv='Content-Type' content='text/html; charset=iso-8859-1'>
    <link rel='stylesheet' type='text/css' href='BASIntstyle.php'>
  
    <script language='JavaScript' type='text/javascript'>
      function showhidefield(checkboxField, toggleField)
      {
        if (checkboxField.checked)
        {
          toggleField.style.visibility = 'visible';
        }
        else
        {
          toggleField.style.visibility = 'hidden';
        }
      }
    </script>

  </head>
  
  <body onload='showhidefield(frmCheckbox.debugCheckbox, divDebugButtons)'>
    <img src='drawbackground.php' ID='bckgrndImg' border="0" alt=''>

    <div ID='block1'>
      <p ID='pgheader'>Online Basic Program Interpreter</p>

      <form name='uploadBASFile' action='uploadBASFile.php' method='get'>
      Program File: <input type='text' name='programFileName'>
      <input type='submit' value='Upload'> </form>
	
      <form name ='changeWorkingDir' action='changeWorkingDir.php' method='get'>
      Working Directory: <input type='text' name='workingDir'>
      <input type='submit' value='Browse'> </form>
      
    </div>

    <div ID='block2'>
    <div ID='block2-a'>	
	
      <form name ='spaceButton1' class='hiddenButton' action='hb.php' method='get'>
      <input type='submit' value=''> </form>
	
      <form name ='spaceButton2' class='hiddenButton' action='hb.php' method='get'>
      <input type='submit' value=''> </form>
	
      <form name ='spaceButton3' class='hiddenButton' action='hb.php' method='get'>
      <input type='submit' value=''> </form>
	
      <form name ='spaceButton4' class='hiddenButton' action='hb.php' method='get'>
      <input type='submit' value=''> </form>

      <form name ='spaceButton5' class='hiddenButton' action='hb.php' method='get'>
      <input type='submit' value=''> </form>
	
      <div ID='divDebugButtons'>
      
        <form name ='viewOrigBAS' action='viewOrigBAS.php' method='get'>
        <input type='submit' value='View Original Code'> </form>
      
        <form name ='viewResultBAS' action='viewResultBAS.php' method='get'>
        <input type='submit' value='View New BAS Code'> </form>

        <form name ='viewVideoPages' action='viewVideoPages.php' method='get'>
        <input type='submit' value='View Video Pages'> </form>

        <form name ='viewVariables' action='viewVariables.php' method='get'>
        <input type='submit' value='View Variables'> </form>

        <form name ='viewJSCode' action='viewJSCode.php' method='get'>
        <input type='submit' value='JavaScript Code'> </form>

        <form name ='exportJSCode' action='exportJSCode.php' method='get'>
        <input type='submit' value='Export JS Code'> </form>
	  
      </div>

      <form name='frmCheckbox' action=''>
      <input type='checkbox' name='debugCheckbox'
      onclick='showhidefield(debugCheckbox, divDebugButtons)'> Debug </form>
    
    </div>	
    
    <div ID="block2-b">
      <img src='drawExecutionWindow.php' ID='execWindow' alt='Execution Window'>
      <br>

      <form name ='runCode' ID='frmRunCode' action='runCode.php' method='get'>
      <input type='submit' ID='runButton' value='Run Program'> </form>
      
    </div>
    </div>

    <div ID='block3'>
    <div ID='block3-a'>
      Statistics
      <br>
	
      Emulated Basic Keywords
    </div>

    <div ID='block3-b'>
      <a href='http://validator.w3.org/check?uri=referer'>
      <img src='http://www.w3.org/Icons/valid-html401'
      alt='Valid HTML 4.01 Transitional' height='31' width='88'>
      </a>

      <a href='http://jigsaw.w3.org/css-validator/check/referer'>
      <img style='border:0;width:88px;height:31px'
      src='http://jigsaw.w3.org/css-validator/images/vcss'
      alt='Valid CSS!'>
      </a>
    </div>
    
    </div>
  </body>
</html>