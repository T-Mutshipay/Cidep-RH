<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="p-4">
        <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700">
            <!-- Top Stats -->
            <div class="grid grid-cols-3 gap-4 mb-4">
                <div class="flex items-center justify-center h-24 rounded bg-blue-500 dark:bg-slate-800">
                    <p class="text-white dark:text-gray-500">
                        Nombre d'Agents : {{ $agentsCount }}
                    </p>
                </div>
                <div class="flex items-center justify-center h-24 rounded bg-green-500 dark:bg-gray-800">
                    <p class="text-white dark:text-gray-500">
                        Nombre de Services : {{ $servicesCount }}
                    </p>
                </div>
                <div class="flex items-center justify-center h-24 rounded bg-purple-500 dark:bg-gray-800">
                    <p class="text-white dark:text-gray-500">
                        Nombre de Directions : {{ $directionsCount }}
                    </p>
                </div>
            </div>

            <!-- Charts -->
            <div class="grid grid-cols-2 gap-4 mb-4">
                <div class="flex items-center justify-center rounded bg-gray-50 h-56 dark:bg-gray-800">
                    <canvas id="barChart" class="w-full h-full"></canvas>
                </div>
                <div class="flex items-center justify-center rounded bg-gray-50 h-56 dark:bg-gray-800">
                    <canvas id="pieChart" class="w-full h-full"></canvas>
                </div>
            </div>

            <!-- List of New Agents -->
            <div class="flex items-center justify-center h-48 mb-4 rounded bg-gray-50 dark:bg-gray-800">
                <div>
                    <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-200 mb-4">
                        Les nouveaux agents :
                    </h3>
                    <ul>
                        @forelse($newAgents as $newAgent)
                            <li class="text-gray-700 dark:text-gray-300">
                                {{ $newAgent->NomAgent }} {{ $newAgent->PrenomAgent }}
                            </li>
                        @empty
                            <li class="text-gray-700 dark:text-gray-300">Aucun nouvel agent.</li>
                        @endforelse
                    </ul>
                </div>
            </div>

            <!-- Agents by Domain -->
            <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mb-4">
                <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-200 mb-4">
                    Répartition des Agents par Domaine :
                </h3>
                <table class="min-w-full bg-white border border-gray-200 dark:bg-gray-800 dark:border-gray-700">
                    <thead>
                        <tr>
                            <th class="py-2 px-4 border-b">Domaine</th>
                            <th class="py-2 px-4 border-b">Nombre d'Agents</th>
                        </tr>
                    </thead>
                    {{-- <tbody>
                        @foreach($agentsByDomain as $domain)
                            <tr>
                                <td class="py-2 px-4 border-b">{{ $domain->NomDomaine }}</td>
                                <td class="py-2 px-4 border-b">{{ $domain->agents_count }}</td>
                            </tr>
                        @endforeach
                    </tbody> --}}
                </table>
            </div>

        </div>
    </div>

    <!-- Include Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const barChartCtx = document.getElementById('barChart').getContext('2d');
            const pieChartCtx = document.getElementById('pieChart').getContext('2d');

            new Chart(barChartCtx, {
                type: 'bar',
                data: {
                    labels: ['Agents', 'Services', 'Directions'],
                    datasets: [{
                        label: 'Statistiques',
                        data: [{{ $agentsCount ?? 0 }}, {{ $servicesCount ?? 0 }}, {{ $directionsCount ?? 0 }}],
                        backgroundColor: ['#3b82f6', '#10b981', '#8b5cf6'],
                    }]
                }
            });

            new Chart(pieChartCtx, {
                type: 'pie',
                data: {
                    labels: ['Agents', 'Services', 'Directions'],
                    datasets: [{
                        label: 'Répartition',
                        data: [{{ $agentsCount ?? 0 }}, {{ $servicesCount ?? 0 }}, {{ $directionsCount ?? 0 }}],
                        backgroundColor: ['#3b82f6', '#10b981', '#8b5cf6'],
                    }]
                }
            });
        });
    </script>
</x-app-layout>
