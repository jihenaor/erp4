<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory;
    protected $fillable = [
        'consecutive', 'customer_id', 'date', 'paymentreference', 'duedate', 'expirationdays', 'referenciacliente',
         //'comercial', 'recipientbank', 'incoterm', 'posicionfiscal', 'pubicar', 'publicarautomaticamente', 'pararevisar',
         //idpaymentterms, iduser, iddocumenttype, idbox
    ];
         public function customer()
         {
             return $this->belongsTo(Customer::class);
         }
         public function documenttype()
         {
             return $this->belongsTo(Documenttype::class);
         }
         public function user()
         {
             return $this->belongsTo(User::class);
         }
         public function paymentterm()
         {
             return $this->belongsTo(Paymentterm::class);
         }
         public function payments()
         {
             return $this->hasMany(Payment::class);
         }
         public function paymentplans()
         {
             return $this->hasMany(Paymentplan::class);
         }
    
        public function box()
        {
            return $this->belongsTo(Box::class);
        }
    }