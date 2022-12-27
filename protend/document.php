<?php
include 'koneksi.php';

$File = $_GET['Url'];
if (File_exists($File)) {
    Header('Content-Description: File Transfer');
    Header('Content-Type: Application/Octet-Stream');
    Header('Content-Disposition: Attachment; Filename="' . Basename($File) . '"');
    Header('Expires: 0');
    Header('Cache-Control: Must-Revalidate');
    Header('Pragma: Public');
    Header('Content-Length: ' . Filesize($File));
    Readfile($File);
    Exit;
}
?>

