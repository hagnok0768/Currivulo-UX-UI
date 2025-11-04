<?php
// Arquivo onde as respostas serão salvas
$file = "respostas.txt";

// Pega os dados enviados
$name = $_POST['client_name'] ?? '';
$contact = $_POST['contact'] ?? '';
$goal = $_POST['goal'] ?? '';
$audience = $_POST['audience'] ?? '';
$service_type = $_POST['service_type'] ?? '';
$services = $_POST['services'] ?? '';
$scheduling = $_POST['scheduling'] ?? '';
$members = $_POST['members'] ?? '';
$branding = $_POST['branding'] ?? '';
$inspiration = $_POST['inspiration'] ?? '';
$promotion = $_POST['promotion'] ?? '';
$budget = $_POST['budget'] ?? '';

// Monta o conteúdo para salvar
$data = "----- New Response -----\n";
$data .= "Name: $name\n";
$data .= "Contact: $contact\n";
$data .= "Goal: $goal\n";
$data .= "Audience: $audience\n";
$data .= "Training Type: $service_type\n";
$data .= "Services: $services\n";
$data .= "Scheduling: $scheduling\n";
$data .= "Members Area: $members\n";
$data .= "Branding: $branding\n";
$data .= "Inspiration: $inspiration\n";
$data .= "Promotion & Success Metrics: $promotion\n";
$data .= "Budget & Timeline: $budget\n";
$data .= "Submitted on: " . date("Y-m-d H:i:s") . "\n\n";

// Salva no arquivo (append)
file_put_contents($file, $data, FILE_APPEND | LOCK_EX);

// Mostra mensagem de sucesso
echo "<h2 style='font-family: Arial; color: green; text-align:center;'>Thank you! Your response has been saved.</h2>";
echo "<p style='text-align:center;'><a href='form.php'>Back to form</a></p>";
?>
