<?php

namespace App\Http\Controllers;

use App\Models\Consecutive;
use App\Models\Document;
use App\Models\Itemdocument;
use Illuminate\Http\Request;

class DocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    private function getConsecutive($documenttype_id) {
        $t = Consecutive::where('documenttype_id', $documenttype_id)
                        ->where('status', 'A')
        ->first();

        /*
        $t = Consecutive::where(
            ['documenttype_id', $documenttype_id],
            ['status', 'A'],
        )
        ->first();
*/
        $consecutive = $t->consecutive;

        $t->consecutive = $consecutive + 1;
        $t->save();

        return $consecutive;
    }

    private function initFields(Request $request, Document $document) {
        $document->customer_id = $request->customer_id;
        $document->documenttype_id = $request->documenttype_id;
        $document->paymentterm_id = $request->paymentterm_id;
        $document->user_id = $request->user_id;
        $document->box_id = $request->box_id;

        $document->date = $request->date;
        $document->paymentreference = $request->paymentreference;
        $document->duedate = $request->duedate;
        $document->expirationdays = $request->expirationdays;
        $document->email = $request->email;
        $document->status = $request->status;

        return $document;
    }

    private function saveItems($items, $document) {
        $i = array();
        foreach( $items as $item ) {
            if (isset($item['id'])) {
                $itemdocument = Itemdocument::find($item['id']);
            } else {
                $itemdocument = new Itemdocument();
            }

            $itemdocument->description = '';
            $itemdocument->qty = $item['qty'];
            $itemdocument->unitvalue = $item['unitvalue'];
            $itemdocument->document_id = $document['id'];
            $itemdocument->item_id = $item['item_id'];
            $itemdocument->row = 0;

            $itemdocument->save();
            array_push($i, $itemdocument);
        }

        return $i;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $document = new Document();

        $document = $this->initFields($request, $document);

        $consecutive = $this->getConsecutive($request->documenttype_id);
        $document->consecutive = $consecutive;


        if ($document->save()) {
            $i = $this->saveItems($request->items, $document);

            $document->items = $i;
            return $document;
        }


    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $document = Document::findOrFail($id);

        $document = $this->initFields($request, $document);

        if ($document->save()) {
            $this->saveItems($request->items, $document);

            return $document;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function destroy(Document $document)
    {
        //
    }

    /**
     * Consulta el documento en estado de borrador por tipo de documento
     *
     * @param  Documenttype_id
     * @return \Illuminate\Http\Response
     */
    public function documentdraft($documenttype_id)
    {
        $t = Document::where('status', 'Borrador')
                    ->where('documenttype_id', $documenttype_id)
                    ->first();

        $t->load('customer');
        return $t;
    }

}


