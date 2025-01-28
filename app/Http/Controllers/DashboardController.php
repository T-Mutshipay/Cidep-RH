<?php

namespace App\Http\Controllers;

use App\Models\Affectation;
use Illuminate\Http\Request;
use App\Models\Agent;
use App\Models\Service;
use App\Models\Direction;
use App\Models\Domaine;
use App\Models\Mutation;

class DashboardController extends Controller
{
    public function index()
    {
        // Fetch statistics
        $agentsCount = Agent::count();
        $servicesCount = Service::count();
        $directionsCount = Direction::count();
        $mutationsCount = Mutation::count();
        $newAgents = Agent::where('created_at', '>=', now()->subDays(30))->get();

        $agentsByDomain = Domaine::all()->map(function ($domain) {
            return [
                'domain' => $domain->nom_domaine,
                'agents_count' => $domain->agent->count(),
            ];
        });

        // Pass data to the view
        return view('dashboard', [
            'agentsCount' => $agentsCount,
            'servicesCount' => $servicesCount,
            'directionsCount' => $directionsCount,
            'newAgents' => $newAgents,
            'agentsByDirection' => $mutationsCount,
            'agentsByService' => $mutationsCount,
            'agentsByDomain' => $agentsByDomain,
        ]);
    }
}
