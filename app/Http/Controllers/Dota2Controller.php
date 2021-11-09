<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateDota2Request;
use App\Http\Requests\UpdateDota2Request;
use App\Repositories\Dota2Repository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class Dota2Controller extends AppBaseController
{
    /** @var  Dota2Repository */
    private $dota2Repository;

    public function __construct(Dota2Repository $dota2Repo)
    {
        $this->dota2Repository = $dota2Repo;
    }

    /**
     * Display a listing of the Dota2.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $dota2s = $this->dota2Repository->all();

        return view('dota2s.index')
            ->with('dota2s', $dota2s);
    }

    /**
     * Show the form for creating a new Dota2.
     *
     * @return Response
     */
    public function create()
    {
        return view('dota2s.create');
    }

    /**
     * Store a newly created Dota2 in storage.
     *
     * @param CreateDota2Request $request
     *
     * @return Response
     */
    public function store(CreateDota2Request $request)
    {
        $input = $request->all();

        $dota2 = $this->dota2Repository->create($input);

        Flash::success('Dota2 saved successfully.');

        return redirect(route('dota2s.index'));
    }

    /**
     * Display the specified Dota2.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $dota2 = $this->dota2Repository->find($id);

        if (empty($dota2)) {
            Flash::error('Dota2 not found');

            return redirect(route('dota2s.index'));
        }

        return view('dota2s.show')->with('dota2', $dota2);
    }

    /**
     * Show the form for editing the specified Dota2.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $dota2 = $this->dota2Repository->find($id);

        if (empty($dota2)) {
            Flash::error('Dota2 not found');

            return redirect(route('dota2s.index'));
        }

        return view('dota2s.edit')->with('dota2', $dota2);
    }

    /**
     * Update the specified Dota2 in storage.
     *
     * @param int $id
     * @param UpdateDota2Request $request
     *
     * @return Response
     */
    public function update($id, UpdateDota2Request $request)
    {
        $dota2 = $this->dota2Repository->find($id);

        if (empty($dota2)) {
            Flash::error('Dota2 not found');

            return redirect(route('dota2s.index'));
        }

        $dota2 = $this->dota2Repository->update($request->all(), $id);

        Flash::success('Dota2 updated successfully.');

        return redirect(route('dota2s.index'));
    }

    /**
     * Remove the specified Dota2 from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $dota2 = $this->dota2Repository->find($id);

        if (empty($dota2)) {
            Flash::error('Dota2 not found');

            return redirect(route('dota2s.index'));
        }

        $this->dota2Repository->delete($id);

        Flash::success('Dota2 deleted successfully.');

        return redirect(route('dota2s.index'));
    }
}
