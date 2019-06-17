<?php

class MYPDF extends TCPDF
{

    // Colored table
    public function candidatos_aprovados($header, $data)
    {
        // Colors, line width and bold font
        $this->SetFillColor(210, 210, 210);
        $this->SetTextColor(0);
        $this->SetDrawColor(0);
        $this->SetLineWidth(0.1);
        $this->SetFont('helvetica', 'B', 10);
        // Header
        $w = array(15,70,55, 50);
        $num_headers = count($header);
        for ($i = 0; $i < $num_headers; ++$i) {
            $this->Cell($w[$i], 7, $header[$i], 0, 0, 'C', 1);
        }
        $this->Ln();

        // Color and font restoration
        $this->SetFillColor(210, 210, 210);
        $this->SetTextColor(0);
        $this->SetFont('');

        // Data
        $fill = 0;
        $cont = 0;
        if ($data != null):
            foreach ($data as $row) {
                $cont++;
                $this->Cell($w[0], 6, $cont, 0, 0, 'L', $fill);
                $this->Cell($w[1], 6, $row['nome_cidadao'], 0, 0, 'C', $fill);
                $this->Cell($w[2], 6, $row['numero_doc'], 0, 0, 'C', $fill);
                $this->Cell($w[3], 6, date("d-m-Y",strtotime($row['data'])), 0, 0, 'C', $fill);
                $this->Ln();
                $fill = !$fill;
            }
        endif;
        $this->Cell(array_sum($w), 0, '', 'T');
    }
}

$pdf = new MYPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
$pdf->AddPage();

$pdf->SetTitle('Dhulka | Candidatos Aprovados');

$pdf->SetFont('helvetica', 'B', 10);
$cabecalho = '<img src="' . site_url('public/assets/img/insignia.png') . '" style="width: 60px;height: 60px;"><br> <span style="color: #000;">REPÚBLICA DE ANGOLA</span><br>';
$cabecalho .= 'ADMINISTRAÇÃO MUNICIPAL DE CACUACO<br>DIREÇÃO MUNICIPAL DE GESTÃO URBANÍSTICA, URBANISMO E CADASTRO<br>';
$pdf->writeHTML($cabecalho, true, false, true, true, 'C');
$pdf->Ln(6);
$nome_projecto = $this->projecto->get_nome_projecto($id_projecto)->nome;
$pdf->SetFont('times', '', 10);
$projecto='<h3>"Projecto - <span style="color: #0c91e5">'.$nome_projecto.'</span>"</h3>';
$pdf->writeHTML($projecto, true, false, true, true, 'C');
$pdf->Ln(3);

$pdf->SetFont('times', '', 14);
$titulo='<span>Relação nominal dos candidatos aprovados</span>';
$pdf->writeHTML($titulo, true, false, true, true, 'C');
$pdf->Ln(3);

$header = array('Nº','Nome','Documento','Data de Inscrição');
$pdf->candidatos_aprovados($header, $listar_candidatos_aprovados);

$pdf->meuFooter();
$pdf->Output('candidatos_aprovados.pdf', 'I');
?>