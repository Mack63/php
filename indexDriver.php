<?


function WorkEngine(){
	$distance = 2; // условное расстояние
	
	for($i=0; $i<$distance; $i++){
		StrokeOne();
		StrokeTwo();
		StrokeThree();
		StrokeFour();
	}
	
}

function StrokeOne(){
	echo "Такт 1 <br>";
	GoDownWork(1);
	GoUpIssue(2);
	GoUpCompression(3);
	GoDownPumping(4);
	echo "<br>------------------------------<br>";
	
}

function StrokeTwo(){
	echo "Такт 2 <br>";
	GoDownWork(3);
	GoUpIssue(1);
	GoUpCompression(4);
	GoDownPumping(2);
	echo "<br>------------------------------<br>";
	
}
function StrokeThree(){
	echo "Такт 3 <br>";
	GoDownWork(4);
	GoUpIssue(3);
	GoUpCompression(2);
	GoDownPumping(1);
	echo "<br>------------------------------<br>";
	
}
function StrokeFour(){
	echo "Такт 4 <br>";
	GoDownWork(2);
	GoUpIssue(4);
	GoUpCompression(1);
	GoDownPumping(3);
	echo "<br>------------------------------<br>";
	
}


function GoDownWork($cylinderNumber){
	MoveCylinderDown($cylinderNumber);
	FireGas();
}

function GoUpCompression($cylinderNumber){
	ReturnCylinderUp($cylinderNumber);
	CompressGas();
}

function GoUpIssue($cylinderNumber){
	ReturnCylinderUp($cylinderNumber);
	IssueGas();
}

function GoDownPumping($cylinderNumber){
	MoveCylinderDown($cylinderNumber);
	AbsorbGas();
}

function FireGas(){
	echo "зажигание топлива, оба клапана закрыты.";
}
function CompressGas(){
	echo "сжатие топлива, оба клапана закрыты.";
}
function IssueGas(){
	echo "выпуск выхлопного газа, правый клапан открыт.";
}
function AbsorbGas(){
	echo "всасывание выхлопного газа, левый клапан открыт.";
}

function ReturnCylinderUp($cylinderNumber){
	echo " Возвращение вверх цилиндра $cylinderNumber, ";
}
function MoveCylinderDown($cylinderNumber){
	echo " Движение вниз цилиндра $cylinderNumber, ";
}

WorkEngine();