<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AddToMailingListRequest;
use App\MailingList;

class MailingListController extends Controller
{
    /**
     * Instance of App\MailingList
     *
     * @var MailingList $mailingList
     */
    protected $mailingList;

    public function __construct()
    {
        $this->mailingList = new MailingList();
    }
    /**
     * Saves a new entry to the mailing_list
     * @var AddToMailingListRequest $request
     *
     */
    public function save(AddToMailingListRequest $request)
    {
        $this->mailingList->fill($request->validated())->save();
        // TODO: send a verification email
        return redirect()->route('thanks');
    }
}
