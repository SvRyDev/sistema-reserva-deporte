<?php
class AboutController extends Controller {
    public function index() {
        $data = [
            'title' => 'Sobre Nosotros',
            'content' => 'Aquí puedes poner la información sobre tu organización, su historia, misión, visión, etc.',
            'module' => 'about',
        ];
        $this->view('client/about', $data);
    }
}
?>
