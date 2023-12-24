<?php 
class SiteClass {	 
	public function year_select(){
		$years = range(1999, 2007);
	 
		 	$i=0;
			 foreach($years as $month => $value){
				$i=0;
			   echo "<option value={$value}>{$value}</option>";
			}
	 
	}
	public function result(){
		if(isset($_POST['submit'])) {
			$name = $_POST['name'];
			$year = $_POST['year'];
		
			// Открываем файл для записи
			$file = fopen('file.txt', 'a+');
		
			// Записываем данные в файл
			fwrite($file, $name.';'.$year.";"."\n");
		
			// Закрываем файл
			fclose($file);
			
			header('Location: index.php');
		}
		}
 
		function print_data_table() {
			$file = fopen("file.txt", "r");
			if ($file) {
				// Начало таблицы и добавление заголовка <thead>
				echo "<table>";
				echo "<thead>
						<tr>
						<th scope=\"col\">#</th>
						<th scope=\"col\">Имя студента</th>
						<th scope=\"col\">Дата рождения</th>
						</tr>
					  </thead>";
				echo "<tbody>"; // начало тела таблицы
			
				// Счетчик для ID строк
				$id = 1;
			
				// Обработка каждой строки файла
				while (($line = fgets($file)) !== false) {
					$values = explode(";", $line);
					echo "<tr>";
					// Вывод ID строки
					echo "<td>" . $id . "</td>";
					foreach ($values as $value) {
						echo "<td>" .$value . "</td>";
					}
					echo "</tr>";
			
					// Увеличиваем ID после обработки строки
					$id++;
				}
				echo "</tbody>"; // конец тела таблицы
				echo "</table>";
			
				fclose($file);
			}
		}	
}
				
 ?>
  <?php 
  
 $sc=new SiteClass;
 $sc->result();
  ?>