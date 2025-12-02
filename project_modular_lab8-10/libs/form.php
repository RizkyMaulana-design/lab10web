<?php
class Form {
    public function open($action, $method = 'POST', $enctype = false) {
        $attr = $enctype ? 'enctype="multipart/form-data"' : '';
        return "<form action='$action' method='$method' $attr class='form-container'>";
    }

    public function close() {
        return "</form>";
    }

    public function input($type, $name, $label, $value = '', $placeholder = '') {
        return "
        <div class='form-group'>
            <label>$label</label>
            <input type='$type' name='$name' value='$value' placeholder='$placeholder' class='form-control'>
        </div>";
    }
    
    public function submit($text = 'Simpan') {
        return "<button type='submit' class='btn-save'>$text</button>";
    }
}
?>