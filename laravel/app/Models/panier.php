<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class panier 
{
    public $items = null;
    public $totalqty = 0;
    public $totalPrix = 0;

    public function __construct($ancpanier) {
        if ($ancpanier) {
            $this->items = $ancpanier->items;
            $this->totalqty = $ancpanier->totalqty;
            $this->totalPrix = $ancpanier->totalPrix;
        } 
    }

    public function add($item, $id) {
        $stockitem = ['qty' => 0, 'Prix' => $item->Prix, 'item' => $item];
        if ($this->items) {
            if (array_key_exists($id, $this->items)) {
                $stockitem = $this->items[$id];
            }
        }
        $stockitem['qty']++;
        $stockitem['Prix'] = $item->Prix * $stockitem['qty'];
        $this->items[$id] = $stockitem; 
        $this->totalqty++;
        $this->totalPrix += $item->Prix; 
    }
}
