<?php

namespace App\Http\Controllers\Cadastro;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Cadastro;

class cadastroController extends Controller
{
        /**
     *
     * @return \Illuminate\Http\Response
     */

  public function cadastraEmpregado(Request $request)
  {
    try 
        {
                $novoCadastroEmpregado = new Cadastro;
                $novoCadastroEmpregado->name           = $request->input('cadastraNome');
                $novoCadastroEmpregado->matricula      = $request->input('cadastraMatricula');
                $novoCadastroEmpregado->coordenacao    = $request->input('cadastraCoordenacao');
                $novoCadastroEmpregado->unidade        = $request->input('cadastraUnidade');
                $novoCadastroEmpregado->save();

                $request->session()->flash('corMensagem', 'success');
                $request->session()->flash('tituloMensagem', 'Cadastro efetuado');
                $request->session()->flash('corpoMensagem', 'Cadastro efetuado com sucesso');

       
        } catch (\Throwable $th) {
                DB::rollback();
                // RETORNA A FLASH MESSAGE
                $request->session()->flash('corMensagem', 'danger');
                $request->session()->flash('tituloMensagem', 'Cadastro não efetuado');
                $request->session()->flash('corpoMensagem', 'Matrícula já cadastrada');
        }
        return back();
  }

  public function listaEmpregado()
  {
        $listaEmpregado = Cadastro::all();
        return json_encode($listaEmpregado);
  }

  public function editaEmpregado(Request $request, $id)
  {
    try 
        {
                $editaCadastoEmpregado = Cadastro::find($id);
                $editaCadastoEmpregado->name           = $request->input('cadastraNome');
                $editaCadastoEmpregado->matricula      = $request->input('cadastraMatricula');
                $editaCadastoEmpregado->coordenacao    = $request->input('cadastraCoordenacao');
                $editaCadastoEmpregado->unidade        = $request->input('cadastraUnidade');
                $editaCadastoEmpregado->save();

                $request->session()->flash('corMensagem', 'success');
                $request->session()->flash('tituloMensagem', 'Edição efetuada');
                $request->session()->flash('corpoMensagem', 'Cadastro editado com sucesso');

       
        } catch (\Throwable $th) {
                DB::rollback();
                // RETORNA A FLASH MESSAGE
                $request->session()->flash('corMensagem', 'danger');
                $request->session()->flash('tituloMensagem', 'Edição não efetuado');
                $request->session()->flash('corpoMensagem', 'Por favor, tente novamente');
        }
        return back();
  }

  public function excluiEmpregado(Request $request, $id)
  {
    try 
        {
                Cadastro::where('id',$id)->delete();

                $request->session()->flash('corMensagem', 'success');
                $request->session()->flash('tituloMensagem', 'Exclusão efetuada');
                $request->session()->flash('corpoMensagem', 'Cadastro excluido com sucesso');

       
        } catch (\Throwable $th) {
                DB::rollback();
                // RETORNA A FLASH MESSAGE
                $request->session()->flash('corMensagem', 'danger');
                $request->session()->flash('tituloMensagem', 'Exclusão não efetuada');
                $request->session()->flash('corpoMensagem', 'Por favor, tente novamente');
        }
        return back();
  }
}
