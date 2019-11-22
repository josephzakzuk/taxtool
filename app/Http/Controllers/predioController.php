<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatepredioRequest;
use App\Http\Requests\UpdatepredioRequest;
use App\Repositories\predioRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use App\Models\Cliente;

class predioController extends AppBaseController
{
    /** @var  predioRepository */
    private $predioRepository;

    public function __construct(predioRepository $predioRepo)
    {
        $this->predioRepository = $predioRepo;
    }

    /**
     * Display a listing of the predio.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->predioRepository->pushCriteria(new RequestCriteria($request));
        $predios = $this->predioRepository->all();

        return view('predios.index')
            ->with('predios', $predios);
    }

    /**
     * Show the form for creating a new predio.
     *
     * @return Response
     */
    public function create()
    {
		$clientes = Cliente::pluck('name', 'id');
        return view('predios.create', compact('clientes'));
    }

    /**
     * Store a newly created predio in storage.
     *
     * @param CreatepredioRequest $request
     *
     * @return Response
     */
    public function store(CreatepredioRequest $request)
    {
        $input = $request->all();

        $predio = $this->predioRepository->create($input);

        Flash::success('Predio saved successfully.');

        return redirect(route('predios.index'));
    }

    /**
     * Display the specified predio.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $predio = $this->predioRepository->findWithoutFail($id);

        if (empty($predio)) {
            Flash::error('Predio not found');

            return redirect(route('predios.index'));
        }

        return view('predios.show')->with('predio', $predio);
    }

    /**
     * Show the form for editing the specified predio.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $predio = $this->predioRepository->findWithoutFail($id);

        if (empty($predio)) {
            Flash::error('Predio not found');

            return redirect(route('predios.index'));
        }

        return view('predios.edit')->with('predio', $predio);
    }

    /**
     * Update the specified predio in storage.
     *
     * @param  int              $id
     * @param UpdatepredioRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatepredioRequest $request)
    {
        $predio = $this->predioRepository->findWithoutFail($id);

        if (empty($predio)) {
            Flash::error('Predio not found');

            return redirect(route('predios.index'));
        }

        $predio = $this->predioRepository->update($request->all(), $id);

        Flash::success('Predio updated successfully.');

        return redirect(route('predios.index'));
    }

    /**
     * Remove the specified predio from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $predio = $this->predioRepository->findWithoutFail($id);

        if (empty($predio)) {
            Flash::error('Predio not found');

            return redirect(route('predios.index'));
        }

        $this->predioRepository->delete($id);

        Flash::success('Predio deleted successfully.');

        return redirect(route('predios.index'));
    }
}
