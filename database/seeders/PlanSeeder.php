<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('plans')->insert([
            'id' => 100,
            'name' => 'Lite',
            'amount' => 11.00,
            'description' => 'Perfect to get started',
            'action_btn_label' => 'Try 7 days for free',
            'features_summary' => 'Lite includes:',
            'icon' => 'data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiPz4KPHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB3aWR0aD0iMjRweCIgaGVpZ2h0PSIyNHB4IiB2aWV3Qm94PSIwIDAgMjQgMjQiIHZlcnNpb249IjEuMSI+CjxnIGlkPSJzdXJmYWNlMSI+CjxwYXRoIHN0eWxlPSIgc3Ryb2tlOm5vbmU7ZmlsbC1ydWxlOm5vbnplcm87ZmlsbDpyZ2IoMjMuMTM3MjU1JSw2Ny44NDMxMzclLDczLjMzMzMzMyUpO2ZpbGwtb3BhY2l0eToxOyIgZD0iTSAxOC43NTc4MTIgMTIuNzUgQyAxOC43NTc4MTIgNS44NjcxODggMTIuNzY1NjI1IDAuNDIxODc1IDEyLjUxMTcxOSAwLjE5NTMxMiBDIDEyLjIxODc1IC0wLjA2NjQwNjIgMTEuNzgxMjUgLTAuMDY2NDA2MiAxMS40OTIxODggMC4xOTUzMTIgQyAxMS4yMzQzNzUgMC40MjE4NzUgNS4yNDIxODggNS44NjcxODggNS4yNDIxODggMTIuNzUgQyA1LjI0MjE4OCAxNC40MTAxNTYgNS45NjA5MzggMTYuMTA1NDY5IDcuMjE0ODQ0IDE3LjQwMjM0NCBDIDguMzMyMDMxIDE4LjU2MjUgOS43NDIxODggMTkuMjczNDM4IDExLjIzNDM3NSAxOS40NTcwMzEgTCAxMS4yMzQzNzUgMjMuMjM0Mzc1IEMgMTEuMjM0Mzc1IDIzLjY1NjI1IDExLjU3ODEyNSAyNCAxMiAyNCBDIDEyLjQyMTg3NSAyNCAxMi43NjU2MjUgMjMuNjU2MjUgMTIuNzY1NjI1IDIzLjIzNDM3NSBMIDEyLjc2NTYyNSAxOS40NTcwMzEgQyAxNC4yNTc4MTIgMTkuMjczNDM4IDE1LjY2Nzk2OSAxOC41NjI1IDE2Ljc4NTE1NiAxNy40MDIzNDQgQyAxOC4wMzkwNjIgMTYuMTA1NDY5IDE4Ljc1NzgxMiAxNC40MTAxNTYgMTguNzU3ODEyIDEyLjc1IFogTSA4LjA5NzY1NiA3LjM1MTU2MiBMIDExLjIzNDM3NSAxMC40OTIxODggTCAxMS4yMzQzNzUgMTMuNjgzNTk0IEwgNy4yMTg3NSA5LjY2Nzk2OSBDIDcuNDQ5MjE5IDguODU1NDY5IDcuNzUzOTA2IDguMDgyMDMxIDguMDk3NjU2IDcuMzUxNTYyIFogTSAxMi43NjU2MjUgMTMuNjgzNTk0IEwgMTIuNzY1NjI1IDEwLjQ5MjE4OCBMIDE1LjkwMjM0NCA3LjM1NTQ2OSBDIDE2LjI0NjA5NCA4LjA4MjAzMSAxNi41NTA3ODEgOC44NTkzNzUgMTYuNzgxMjUgOS42Njc5NjkgWiBNIDE1LjE1MjM0NCA1Ljk0NTMxMiBDIDE1LjE0MDYyNSA1Ljk1NzAzMSAxNS4xMjUgNS45Njg3NSAxNS4xMTMyODEgNS45ODA0NjkgTCAxMi43NjU2MjUgOC4zMzIwMzEgTCAxMi43NjU2MjUgMi42NjQwNjIgQyAxMy40NjQ4NDQgMy40NjQ4NDQgMTQuMzUxNTYyIDQuNTg5ODQ0IDE1LjE1MjM0NCA1Ljk0NTMxMiBaIE0gMTEuMjM0Mzc1IDIuNjY0MDYyIEwgMTEuMjM0Mzc1IDguMzI4MTI1IEwgOC44ODY3MTkgNS45ODA0NjkgQyA4Ljg3NSA1Ljk2ODc1IDguODYzMjgxIDUuOTU3MDMxIDguODQ3NjU2IDUuOTQ1MzEyIEMgOS42NDg0MzggNC41ODk4NDQgMTAuNTM1MTU2IDMuNDY0ODQ0IDExLjIzNDM3NSAyLjY2NDA2MiBaIE0gNi43NzM0MzggMTIuNzUgQyA2Ljc3MzQzOCAxMi4zMTI1IDYuODAwNzgxIDExLjg4NjcxOSA2Ljg1NTQ2OSAxMS40NjA5MzggTCAxMS4yMzQzNzUgMTUuODQzNzUgTCAxMS4yMzQzNzUgMTcuOTE0MDYyIEMgOC42MzY3MTkgMTcuNDk2MDk0IDYuNzczNDM4IDE1IDYuNzczNDM4IDEyLjc1IFogTSAxMi43NjU2MjUgMTcuOTE0MDYyIEwgMTIuNzY1NjI1IDE1Ljg0Mzc1IEwgMTcuMTQ0NTMxIDExLjQ2NDg0NCBDIDE3LjE5OTIxOSAxMS44ODY3MTkgMTcuMjI2NTYyIDEyLjMxNjQwNiAxNy4yMjY1NjIgMTIuNzUgQyAxNy4yMjY1NjIgMTUgMTUuMzYzMjgxIDE3LjQ5NjA5NCAxMi43NjU2MjUgMTcuOTE0MDYyIFogTSAxMi43NjU2MjUgMTcuOTE0MDYyICIvPgo8L2c+Cjwvc3ZnPgo='
        ]);

        DB::table('plans')->insert([
            'id' => 200,
            'name' => 'Pro',
            'amount' => 19.00,
            'description' => 'Best for professionals',
            'popular' => true,
            'features_summary' => 'Everthing in Lite, plus:',
            'icon' => 'data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNHB4IiBoZWlnaHQ9IjI0cHgiIHZpZXdCb3g9IjAgMCAyNCAyNCI+PHBhdGggZD0iTTE4LDZIMTQuNDFsMi4zLTIuMjlhMSwxLDAsMSwwLTEuNDItMS40MkwxMiw1LjU0bC0xLjE3LTJhMSwxLDAsMSwwLTEuNzQsMUwxMCw2SDZBMywzLDAsMCwwLDMsOXY4YTMsMywwLDAsMCwzLDN2MWExLDEsMCwwLDAsMiwwVjIwaDh2MWExLDEsMCwwLDAsMiwwVjIwYTMsMywwLDAsMCwzLTNWOUEzLDMsMCwwLDAsMTgsNlptMSwxMWExLDEsMCwwLDEtMSwxSDZhMSwxLDAsMCwxLTEtMVY5QTEsMSwwLDAsMSw2LDhIMThhMSwxLDAsMCwxLDEsMVoiIGZpbGw9IiMzYmFkYmIiLz48L3N2Zz4='
        ]);

        DB::table('plans')->insert([
            'id' => 300,
            'name' => 'Ultimate',
            'amount' => 35.00,
            'description' => 'Toolset for hard players',
            'features_summary' => 'Everthing in Pro, plus:',
            'icon' => 'data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNHB4IiBoZWlnaHQ9IjI0cHgiIHZpZXdCb3g9IjAgMCAyNCAyNCI+PHBhdGggZD0iTTE5Ljg5LDkuNTVBMSwxLDAsMCwwLDE5LDlIMTRWM2ExLDEsMCwwLDAtLjY5LTEsMSwxLDAsMCwwLTEuMTIuMzZsLTgsMTFhMSwxLDAsMCwwLS4wOCwxQTEsMSwwLDAsMCw1LDE1aDV2NmExLDEsMCwwLDAsLjY5Ljk1QTEuMTIsMS4xMiwwLDAsMCwxMSwyMmExLDEsMCwwLDAsLjgxLS40MWw4LTExQTEsMSwwLDAsMCwxOS44OSw5LjU1Wk0xMiwxNy45MlYxNGExLDEsMCwwLDAtMS0xSDdsNS02LjkyVjEwYTEsMSwwLDAsMCwxLDFoNFoiIGZpbGw9IiMzYmFkYmIiLz48L3N2Zz4='
        ]);
    }
}
