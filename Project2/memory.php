<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="memory.css">
    <title>Criminal Mind's Memory Game</title>
    <style>
		table, th, td {
			border: 1px solid black;
			border-collapse: collapse;
		}
	</style>
</head>

<body>
<?php 
    $input = array(

        '<table>
        <tr>
            <td id="total">
                <input type="checkbox" id="toggle">
                <label id="click" for="toggle"><span>Click me!</span></label>
                <div class="card" id="seven">
                </div>
            </td>

            <td id="total">
                <input type="checkbox" id="toggle2">
                <label id="click" for="toggle2"><span>Click me!</span></label>
                <div class="card" id="four">
        
                </div>
            </td>

            <td id="total">
                <input type="checkbox" id="toggle3">
                <label id="click" for="toggle3"><span>Click me!</span></label>
                <div class="card" id="eleven">
        
                </div>
            </td>

            <td id="total">
                <input type="checkbox" id="toggle4">
                <label id="click" for="toggle4"><span>Click me!</span></label>
                <div class="card" id="six">
				</div>
            </td>

            <td id="total">
                <input type="checkbox" id="toggle5">
                <label id="click" for="toggle5"><span>Click me!</span></label>
                <div class="card" id="twelve">
                </div>
            </td>

            <td id="total">
                <input type="checkbox" id="toggle6">
                <label id="click" for="toggle6"><span>Click me!</span></label>
                <div class="card" id="one">
                </div>
            </td>
        </tr>

        <tr>
            <td id="total">
                <input type="checkbox" id="toggle7">
                <label id="click" for="toggle7"><span>Click me!</span></label>
                <div class="card" id="eight">
                </div>
            </td>

            <td id="total">
                <input type="checkbox" id="toggle8">
                <label id="click" for="toggle8"><span>Click me!</span></label>
                <div class="card" id="three">
                </div>
            </td>

            <td id="total">
                <input type="checkbox" id="toggle9">
                <label id="click" for="toggle9"><span>Click me!</span></label>
                <div class="card" id="two">
                </div>
            </td>

            <td id="total">
                <input type="checkbox" id="toggle10">
                <label id="click" for="toggle10"><span>Click me!</span></label>
                <div class="card" id="five">
                </div>
            </td>

            <td id="total">
                <input type="checkbox" id="toggle11">
                <label id="click" for="toggle11"><span>Click me!</span></label>
                <div class="card" id="nine">
                </div>
            </td>

            <td id="total">
                <input type="checkbox" id="toggle12">
                <label id="click" for="toggle12"><span>Click me!</span></label>
                <div class="card" id="ten">
                </div>
            </td>
        </tr>
        <tr>
            <td id="total">
                <input type="checkbox" id="toggle13">
                <label id="click" for="toggle13"><span>Click me!</span></label>
                <div class="card" id="twelve">
                </div>
            </td>
            <td id="total">
                <input type="checkbox" id="toggle14">
                <label id="click" for="toggle14"><span>Click me!</span></label>
                <div class="card" id="ten">
                </div>
            </td>
            <td id="total">
                <input type="checkbox" id="toggle15">
                <label id="click" for="toggle15"><span>Click me!</span></label>
                <div class="card" id="nine">
                </div>
            </td>
            <td id="total">
                <input type="checkbox" id="toggle16">
                <label id="click" for="toggle16"><span>Click me!</span></label>
                <div class="card" id="eight">
                </div>
            </td>
            <td id="total">
                <input type="checkbox" id="toggle17">
                <label id="click" for="toggle17"><span>Click me!</span></label>
                <div class="card" id="one">
                </div>
            </td>
            <td id="total">
                <input type="checkbox" id="toggle18">
                <label id="click" for="toggle18"><span>Click me!</span></label>
                <div class="card" id="three">
                </div>
            </td>
        </tr>
		<tr>
            <td id="total">
                <input type="checkbox" id="toggle19">
                <label id="click" for="toggle19"><span>Click me!</span></label>
                <div class="card" id="eleven">
                </div>
            </td>
            <td id="total">
                <input type="checkbox" id="toggle20">
                <label id="click" for="toggle20"><span>Click me!</span></label>
                <div class="card" id="five">
                </div>
            </td>
            <td id="total">
                <input type="checkbox" id="toggle21">
                <label id="click" for="toggle21"><span>Click me!</span></label>
                <div class="card" id="seven">
                </div>
            </td>
            <td id="total">
                <input type="checkbox" id="toggle22">
                <label id="click" for="toggle22"><span>Click me!</span></label>
                <div class="card" id="four">
                </div>
            </td>
            <td id="total">
                <input type="checkbox" id="toggle23">
                <label id="click" for="toggle23"><span>Click me!</span></label>
                <div class="card" id="six">
                </div>
            </td>
            <td id="total">
                <input type="checkbox" id="toggle24">
                <label id="click" for="toggle24"><span>Click me!</span></label>
                <div class="card" id="two">
                </div>
            </td>
        </tr>

      </table>',
    );

    foreach ($input as $inputs){
        
                echo "$inputs";
        
    }
?>
</body>
</html>