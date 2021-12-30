<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValidatePlan;
use App\Models\Plan;
use Illuminate\Http\Request;

class PlanController extends Controller
{
    public function listPlan(){
        $plans = Plan::paginate(8);
        return view('plan.plan',compact('plans'));
    }

    public function searchPlan($id) {
        $plan = Plan::find($id);
        return view('plan.planDatails', compact('plan'));
    }

    public function newPlan() {
        return view("plan.createPlan");
    }

    public function createPlan(ValidatePlan $payload) {

        $response = Plan::create($payload->all());

        if (!$response) {
            dd($payload->all());
        }
        return redirect()->route('listPlan')->with("messages", "O plano {$response->name} foi adicionado com sucesso!");

    }

    function editPlan($id) {

        $plan = Plan::find($id);
        if (!$plan) {
            return redirect()->back();
        }

        return view('plan.editPlan', compact('plan'));
    }

    public function deletePlan($id) {
        $response = plan::find($id);

        if (!$response){
            return redirect()->route('listPlan');
        }

        $response->delete();
        return redirect()->route('listPlan')->with("messages", "O aluno {$response->name} foi removido com sucesso!");

    }
}
