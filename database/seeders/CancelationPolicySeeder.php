<?php

namespace Database\Seeders;

use App\Models\CancelationPolicy;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CancelationPolicySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'code' => '00f133f5-b1b5-4b43-8a62-15722ceb9051', 
                'name' => 'Cancel 7D prior arrival 100% charge. No Show 100% charge.',
            ],
            [
                'code' => '0439ac2e-6cce-4f38-bc40-2de73ea442c9', 
                'name' => 'Cancel 21D prior arrival 50% charge. No Show 100% charge.',
            ],
            [
                'code' => '0487e92a-7840-4b4f-a619-4011e3eb0eb3', 
                'name' => 'Cancel 31D prior arrival 2D charge. No Show 100% charge.',
            ],
            [
                'code' => '0763e666-ed0c-427d-837d-7a2935327900', 
                'name' => 'Cancel 21D prior arrival 1N charge. No Show 100% charge.',
            ],
            [
                'code' => '077e97a5-8a24-4c85-8085-f75472618ef1', 
                'name' => 'Cancel 31D prior arrival 100% charge. No Show 100% charge.',
            ],
            [
                'code' => '07e258b6-8084-4455-935d-13acad511119', 
                'name' => 'Cancel 45D prior arrival 2D charge. No Show 100% charge.',
            ],
            [
                'code' => '080c1c00-7dbc-4a9a-b476-73bc30bc5d3a', 
                'name' => 'Cancel 4D prior arrival 1N charge. No Show 100% charge.',
            ],
            [
                'code' => '081ef8a5-7b1a-46d9-b67d-828b643bf993', 
                'name' => 'Cancel 4D prior arrival 1D charge. No Show 1D charge.',
            ],
            [
                'code' => '0ae5ff7a-9e06-42de-ad90-0f425836c677', 
                'name' => 'Cancel 10D prior arrival 50% charge.No Show 100% charge.',
            ],
            [
                'code' => '0b480bf0-adbc-4a0f-9fda-ab3e2314b451', 
                'name' => 'Cancel 1D prior arrival 1N charge, No Show 1N charge',
            ],
            [
                'code' => '0bf990f7-cd16-4e98-adbc-894a4428477a', 
                'name' => 'Cancel 7D prior arrival 1D charge. Cancel 3D prior arrival 100% charge. No Show 100% charge.',
            ],
            [
                'code' => '0defe289-5ddb-47fd-899e-4eaf2339a89a', 
                'name' => 'Cancel 45D prior arrival 50% charge. Cancel 31D prior arrival 100% charge. No Show 100% charge.',
            ],
            [
                'code' => '0e8d8f51-d950-4e1c-a097-00535f32c57e', 
                'name' => 'Cancel 21D prior arrival 50% charge. No Show 50% charge.',
            ],
            [
                'code' => '12b5212b-ffcc-4c5e-b352-192e3bcf6e66', 
                'name' => 'Cancel 3D prior arrival 50% charge. No Show 100% charge.',
            ],
            [
                'code' => '1334b38e-976b-40c0-b73e-f5596caf7122', 
                'name' => 'Cancel 7D prior arrival 50% charge. Cancel 3D prior arrival 100% charge. No Show 100% charge.',
            ],
            [
                'code' => '1575dd64-d9a5-46b7-877c-a945ecd4c877', 
                'name' => 'Cancel 7D prior arrival 1D charge. Cancel 3D prior arrival 50% charge. No Show 100% charge.',
            ],
            [
                'code' => '158f9f7b-fadb-424d-bccd-07ee65af9b05', 
                'name' => 'Cancel 21D prior arrival 1D charge. Cancel 7D prior arrival 50% charge. No Show 100% charge.',
            ],
            [
                'code' => '15ef92dd-fc6a-48e7-9295-24479b743cae', 
                'name' => 'Cancel 14D prior arrival 1D charge. Cancel 7D prior arrival 2D charge. No Show 100% charge.',
            ],
            [
                'code' => '16c20e8f-3a5f-4848-8f3c-c56fda54b6e8', 
                'name' => 'Cancel 14D prior arrival 2D charge. Cancel 7D prior arrival 100% charge. No Show 100% charge.',
            ],
            [
                'code' => '175e0106-2f76-4475-9879-059eb9d29749', 
                'name' => 'Cancel 31D prior arrival 50% charge. No Show 50% charge.',
            ],
            [
                'code' => '181bb390-1a43-4f4d-a212-56622b57c3aa', 
                'name' => 'Cancel 3D prior arrival 50% charge. 2D prior arrival 75% charge. No Show 1N charge.',
            ],
            [
                'code' => '18ea3f62-c1f3-4d3b-9f3a-e90259843a18', 
                'name' => 'Cancel 31D prior arrival 1D charge. Cancel 7D prior arrival 100% charge. No Show 100% charge.',
            ],
            [
                'code' => '1b74f3ce-f32c-4c31-8fc6-81476f1d0b9a', 
                'name' => 'Cancel 14D prior arrival 50% charge. No Show 50% charge.',
            ],
            [
                'code' => '1e7fa0db-c140-4f2f-9f7e-b32fc4cb5f60', 
                'name' => 'Cancel 7D prior arrival 50% charge. Cancel 3D prior arrival 100% charge. No Show 100% charge.',
            ],
            [
                'code' => '21c4c276-2fe8-4cbe-ae2a-f03f9bb86113', 
                'name' => 'Cancel 10D prior arrival 1D charge. No Show 1D charge.',
            ],
            [
                'code' => '21f63611-9233-41d2-bd32-4be8872dc834', 
                'name' => 'Cancel 1D prior arrival 0% charge. No Show 1D charge.',
            ],
            [
                'code' => '2486de33-ca29-4229-a677-20368f3623a1', 
                'name' => 'Cancel 14D prior arrival 50% charge. Cancel 7D prior arrival 100% charge. No Show 100% charge.',
            ],
            [
                'code' => '2950b578-cc8e-406e-bd28-a911f958dcbc', 
                'name' => 'Cancel 21D prior arrival 1D charge. Cancel 14D prior arrival 100% charge. No Show 100% charge.',
            ],
            [
                'code' => '2c75f185-51d2-4b09-8fbe-d25f4b96ab3a', 
                'name' => 'Cancel 3D prior arrival 50% charge. No Show 50% charge.',
            ],
            [
                'code' => '2d33d793-d020-45d3-9986-a2eace791e3a', 
                'name' => 'Cancel 30D prior arrival 100% charge. No Show 100% charge.',
            ],
            [
                'code' => '2e1f6c1e-65e3-42fe-b114-671a49d076d1', 
                'name' => 'Cancel 21D prior arrival 2D charge. No Show 2D charge.',
            ],
            [
                'code' => '2f069ffa-c2f5-434c-b92e-7b20bb8dc044', 
                'name' => 'Cancel 7D prior arrival 1D charge. Cancel 1D prior arrival 100% charge. No Show 100% charge.',
            ],
            [
                'code' => '2f1f7325-bc99-4edc-b2ca-9f8de8c81805', 
                'name' => 'Cancel 21D prior arrival 1D charge. Cancel 14D prior arrival 100% charge. No Show 100% charge.',
            ],
            [
                'code' => '316f3af0-abe1-487d-8d90-62c3902676dc', 
                'name' => 'Cancel 3D prior to arrival 2N charge. No Show 2D charge.',
            ],
            [
                'code' => '34da298f-5544-48a4-8e60-dd1dbe33b298', 
                'name' => 'Cancel 7D prior arrival 1D charge. No Show 50% charge.',
            ],
            [
                'code' => '39e366b6-40d5-42d1-9604-475209b06d5c', 
                'name' => 'Cancel 60D prior arrival 50% charge. 31D prior arrival 100% charge. No Show 100% charge.',
            ],
            [
                'code' => '3aaf8055-2b72-45c6-a6a1-a66849a2ec98', 
                'name' => 'Cancel 2D prior arrival 100% charge. No Show 100% charge. ',
            ],
            [
                'code' => '3b35bb4d-5870-4b69-8568-bb7bbec2a793', 
                'name' => 'Cancel 3D prior arrival 1D charge. Cancel 1D prior arrival 100% charge. No Show 100% charge.',
            ],
            [
                'code' => '3be3e9f9-c350-4fc1-894d-5542784143c6', 
                'name' => 'Cancel 31D prior arrival 50% charge. Cancel 21D prior arrival 100% charge. No Show 100% charge.',
            ],
            [
                'code' => '3ced586a-7ce6-49f1-bbf4-4cc401aa045e', 
                'name' => 'Cancel 2D prior arrival 1D charge. No Show 1D charge.',
            ],
            [
                'code' => '3ed0a997-de26-4ff0-aba2-04349113ce38', 
                'name' => 'Cancel 31D prior arrival 50% charge. No Show 100% charge.',
            ],
            [
                'code' => '3f4c080c-c3f7-4a76-b15a-1d6a4938e28f', 
                'name' => 'Cancel 4D prior arrival 1D charge. No Show 1D charge.',
            ],
            [
                'code' => '4218bbfa-1ad8-4f9a-a9f2-03afafcce011', 
                'name' => 'Cancel 7D prior arrival 100% charge. No Show 100% charge.',
            ],
            [
                'code' => '4526eca1-48ad-4edf-b67b-6c63b3ac35ab', 
                'name' => 'Cancel 6D prior arrival 100% charge. No Show 100% charge.',
            ],
            [
                'code' => '45c1a8c5-fd39-412f-93d4-998290b311e4', 
                'name' => 'Cancel 7D prior arrival 100% charge. No Show 1D charge.',
            ],
            [
                'code' => '483d14a3-f15c-4807-b2ce-330950db0dec', 
                'name' => 'Cancel 31D prior arrival 1N charge. No Show 100% charge.',
            ],
            [
                'code' => '49b728be-14f2-437e-9f91-d01348f050df', 
                'name' => 'Cancel 14D prior arrival 1N charge. No Show 1N charge.',
            ],
            [
                'code' => '49db0194-416a-4845-af9b-c4bfe4353975', 
                'name' => 'Cancel 7D prior arrival 30% charge. No Show 30% charge.',
            ],
            [
                'code' => '4c143328-a964-4410-8002-85ac8154e44c', 
                'name' => 'Cancel 21D prior arrival 1D charge. Cancel 14D prior arrival 50% charge. No Show 100% charge.',
            ],
            [
                'code' => '4e90d36f-af38-48e4-992f-f640efef7b22', 
                'name' => 'Cancel 5D prior arrival 1N charge. No Show 1N charge.',
            ],
            [
                'code' => '52c8b561-18e8-4105-8a15-1fb21ba831a8', 
                'name' => 'Cancel 45D prior arrival 1D charge. No Show 1D charge.',
            ],
            [
                'code' => '5551b044-db1b-441b-b57c-edf5fe271b55', 
                'name' => 'Cancel 21D prior arrival 1D charge. Cancel 7D prior arrival 100% charge. No Show 100% charge.',
            ],
            [
                'code' => '561e97b2-d28e-46a0-8d7e-1c906a36a6e7', 
                'name' => 'Cancel 31D prior arrival 2D charge. Cancel 14D prior arrival 100% charge. No Show 100% charge.',
            ],
            [
                'code' => '5ffcc5f9-ed55-4c12-9065-2a5ceecefeac', 
                'name' => 'Cancel 14D prior arrival 100% charge. No Show 100% charge.',
            ],
            [
                'code' => '67808c3b-0420-45e2-8d73-d0737a1a2807', 
                'name' => 'Cancel 7D prior arrival 2D charge. No Show 100% charge.',
            ],
            [
                'code' => '6da937fe-7341-4a06-890c-f15db32ca754', 
                'name' => 'Cancel 3D prior arrival 1N charge. No Show 1N charge.',
            ],
            [
                'code' => '6f6f4bc8-785a-4cd7-806b-a5346dbccf1d', 
                'name' => 'Cancel 10D prior arrival 100% charge. No Show 100% charge.',
            ],
            [
                'code' => '743d54c1-6123-410e-bcd8-35fdc4a43666', 
                'name' => 'Cancel 15D prior arrival 1D charge. No Show 1D charge.',
            ],
            [
                'code' => '748f496f-05a1-4f26-b3dd-5d30373370ed', 
                'name' => 'Cancel 2D prior arrival 2N charge. No Show 100% Charge',
            ],
            [
                'code' => '74a3845f-be6e-4b2e-bc50-b20b6dbb3cb6', 
                'name' => 'Cancel 7D prior arrival 50% charge. 1D prior arrival 100% charge. No Show 100% charge.',
            ],
            [
                'code' => '751210d7-283b-4669-9e79-57bd7debe12d', 
                'name' => 'Cancel 7D prior arrival 1N charge. No Show 1N charge.',
            ],
            [
                'code' => '75fd740e-4e34-49c2-bf1a-040f29951fc8', 
                'name' => 'Cancel 60D prior arrival 100% charge. No Show 100% charge.',
            ],
            [
                'code' => '778c6f8d-b094-4a14-878e-3b9da71b277c', 
                'name' => 'Cancel 1D prior arrival 0% charge. No Show 100% charge.',
            ],
            [
                'code' => '778d0615-ff0e-47ff-b2de-8e3e1f931261', 
                'name' => 'Cancel 21D prior arrival 1D charge. No Show 1D charge.',
            ],
            [
                'code' => '83173591-a7fa-485e-80f9-e1b6f7c3fbdd', 
                'name' => 'Cancel 365D prior to arrival 50% charge. Cancel 3D prior to arrival 100% charge. No Show 100% Charge',
            ],
            [
                'code' => '866199fd-e00d-4c74-8249-84fc1ae565ea', 
                'name' => 'Cancel 2D prior arrival 1D charge. Cancel 1D prior arrival 100% charge. No Show 100% charge.',
            ],
            [
                'code' => '8825bb5f-8574-40e6-8014-234f6109838d', 
                'name' => 'Cancel 60D prior arrival 50% charge. No Show 100% charge.',
            ],
            [
                'code' => '89e583f7-d4b1-434c-94fc-e11ce8767da5', 
                'name' => 'Cancel 21D prior arrival 100% charge. No Show 100% charge.',
            ],
            [
                'code' => '8a846a3e-76b0-48e9-bc8f-9c23fd181437', 
                'name' => 'Cancel 31D prior arrival 50% charge. Cancel 14D prior arrival 100% charge. No Show 100% charge.',
            ],
            [
                'code' => '8b4fa82b-6438-46f1-974e-e85a34cfa954', 
                'name' => 'Cancel before Check In Time No Charge. No Show 1N charge.',
            ],
            [
                'code' => '8b796e95-3117-4f9e-b583-9092deb02eeb', 
                'name' => 'Cancel 21D prior arrival 50% charge. Cancel 14D prior arrival 100% charge. No Show 100% charge.',
            ],
            [
                'code' => '95a7c69e-bd89-40f9-908e-2dab6c5a2570', 
                'name' => 'Cancel 7D prior arrival 50% charge. No Show 1D charge.',
            ],
            [
                'code' => '96559710-692a-42ed-9fa4-af325a138a54', 
                'name' => 'Cancel 60D prior arrival 50% charge. Cancel 31D prior arrival 100% charge. No Show 100% charge.',
            ],
            [
                'code' => '97192fed-22e2-4dcd-ad2e-d4a45167c20f', 
                'name' => 'Cancel 5D prior arrival 50% charge. No Show 50% charge.',
            ],
            [
                'code' => '978d4d01-2973-4a32-be93-f0973b6eb632', 
                'name' => 'Cancel 90D prior arrival 100% charge. No Show 100% charge.',
            ],
            [
                'code' => '9913be1d-2fc7-4e36-baea-e64d20cd4a38', 
                'name' => 'Cancel 1D prior arrival 100% charge. No Show 100% charge.',
            ],
            [
                'code' => '99cac2c2-8dbf-4f08-adf9-298b5a1cca96', 
                'name' => 'Cancel 14D prior arrival 2D charge. No Show 1D charge.',
            ],
            [
                'code' => '9b3bedf6-2722-45ba-80b0-19f91c88f490', 
                'name' => 'Cancel 3D prior arrival 1N charge. No Show 100% charge.',
            ],
            [
                'code' => 'a1933d3c-c243-4c75-9cd8-f011fa13d891', 
                'name' => 'Cancel 365D prior arrival 1D charge. Cancel 30D prior arrival 100% charge. No Show 100% charge.',
            ],
            [
                'code' => 'a2f4e2f4-8faf-4b53-b2dd-ee4aba5d38ce', 
                'name' => 'Cancel 2D prior arrival 1N charge. No Show 100% charge.',
            ],
            [
                'code' => 'a3a11d4d-28e8-4dd8-80c4-ca6b5571c523', 
                'name' => 'Cancel 21D prior arrival 50% charge. Cancel 7D prior arrival 100% charge. No Show 100% charge.',
            ],
            [
                'code' => 'a4387a8a-d176-4c8b-9d27-ee41bba8d352', 
                'name' => 'Cancel 14D prior arrival 2D charge. No Show 100% charge.',
            ],
            [
                'code' => 'a6d157da-a19d-4094-b4ff-fc5fbecda92f', 
                'name' => 'Cancel 45D prior arrival 100% charge. No Show 100% charge.',
            ],
            [
                'code' => 'a6e0fdca-b5a4-4329-abd7-503e410099b1', 
                'name' => 'Cancel 21D prior arrival 50% charge. Cancel 14D prior arrival 100% charge. No Show 100% charge.',
            ],
            [
                'code' => 'a904cc66-edcc-4c1e-ad94-274d233c016d', 
                'name' => 'Cancel 45D prior arrival 50% charge. No Show 50% charge.',
            ],
            [
                'code' => 'a91b7de4-f717-4ade-8a8c-5f659f060998', 
                'name' => 'Cancel 7D prior arrival 1N charge. No Show 100% charge.',
            ],
            [
                'code' => 'a9b66bb3-3790-419c-84ef-19088dc7ff4f', 
                'name' => 'Cancel 14D prior arrival 1D charge. Cancel 7D prior arrival 100% charge. No Show 100% charge.',
            ],
            [
                'code' => 'a9f4adcf-4b54-43e0-a789-12e3b219cba0', 
                'name' => 'Cancel 5D prior arrival 100% charge. No Show 100% charge.',
            ],
            [
                'code' => 'aa0ab761-fbeb-4b71-a1f5-ba6cd782758a', 
                'name' => 'Cancel 4D prior arrival 100% charge. No Show 100% charge.',
            ],
            [
                'code' => 'ad57996f-2480-4633-bf58-7ac755c31b89', 
                'name' => 'Cancel 365D prior arrival 1D charge. Cancel 3D prior arrival 100% charge. No Show 100% charge.',
            ],
            [
                'code' => 'ae0d7da2-d6e4-4f2f-8fb9-9d5696e64aa6', 
                'name' => 'Non Refundable',
            ],
            [
                'code' => 'b3a7b7cb-1d84-460b-8d5b-8996b5d5c083', 
                'name' => 'Cancel 2D prior arrival 2N charge. No Show 2N Charge.',
            ],
            [
                'code' => 'b7fd0cad-9d11-4692-bf63-02da0b1baff9', 
                'name' => 'Cancel 365D prior arrival 1D charge. Cancel 7D prior arrival 100% charge. No Show 100% charge.',
            ],
            [
                'code' => 'c311ce87-76c8-4f15-add5-70f39519c3fc', 
                'name' => 'Cancel 14D prior arrival 1N charge. No Show 100% charge.',
            ],
            [
                'code' => 'c46c86f0-cb7b-46a6-b045-bfde47a626f6', 
                'name' => 'Cancel 1D prior arrival 1N charge. No Show 100% charge',
            ],
            [
                'code' => 'c6100df4-4346-4966-b8a0-5c43a6a4ff5a', 
                'name' => 'Cancel 31D prior arrival 1D charge. Cancel 14D prior arrival 100% charge. No Show 100% charge.',
            ],
            [
                'code' => 'c6ca370c-bfcc-4a1c-8027-2dc2b023a5fc', 
                'name' => 'Cancel 14D prior arrival 50% charge. No Show 100% charge.',
            ],
            [
                'code' => 'c7b12ec8-07d3-4e4c-af45-500938f871f1', 
                'name' => 'Cancel 31D prior arrival 50% charge. Cancel 7D prior arrival 100% charge. No Show 100% charge.',
            ],
            [
                'code' => 'c8d76dd7-9916-4554-9ce5-12daefd3cdde', 
                'name' => 'Cancel 5D prior arrival 1D charge. No Show 100% charge.',
            ],
            [
                'code' => 'cc079a66-0d02-4494-a997-2e407b7efc4b', 
                'name' => 'Cancel 3D prior arrival 1D charge. No Show 50% charge.',
            ],
            [
                'code' => 'cc6de45f-f0cf-46de-b7c1-604de0df90f6', 
                'name' => 'Cancel 60D prior arrival 2D charge. Cancel 31D prior arrival 100% charge. No Show 100% charge.',
            ],
            [
                'code' => 'ccc4df80-5451-427b-8885-32f047f636a7', 
                'name' => 'Cancel 30D prior arrival 1N charge. No Show 1N charge.',
            ],
            [
                'code' => 'cd5dc273-6922-4116-a585-1e544c58598e', 
                'name' => 'Cancel 7D prior arrival 50% charge. No Show 100% charge.',
            ],
            [
                'code' => 'cff2bdae-9e34-415a-9743-97e570e3a57c', 
                'name' => 'Cancel 31D prior arrival 1D charge. Cancel 21D prior arrival 100% charge. No Show 100% charge.',
            ],
            [
                'code' => 'd08843e6-437b-45e4-b4de-a2f381999a2d', 
                'name' => 'Cancel 30D prior arrival 1N charge. No Show 100% charge.',
            ],
            [
                'code' => 'd3119264-1ae8-4516-a781-ada01bda9e02', 
                'name' => 'Cancel 3D prior arrival 50% charge. Cancel 1D prior arrival 100% charge. No Show 100% charge.',
            ],
            [
                'code' => 'd70b4888-6f98-4bf6-ab02-817d45695b6e', 
                'name' => 'Cancel 2D prior arrival 1D charge. No Show 1D charge.',
            ],
            [
                'code' => 'd786c530-12ff-4e19-8315-fab6dc4d6a86', 
                'name' => 'Cancel 21D prior arrival 2D charge. No Show 100% charge.',
            ],
            [
                'code' => 'd7bc91f3-85fd-4703-8b07-95750d4cfc1f', 
                'name' => 'Cancel 7D prior arrival 25% charge. 3D prior arrival 50% charge. No Show 100% charge.',
            ],
            [
                'code' => 'd800743a-173b-4432-8c23-de4567378e7d', 
                'name' => 'Cancel 3D prior arrival 100% charge. No Show 100% charge.',
            ],
            [
                'code' => 'dafd2efc-bb87-4ffa-a6de-4c0169bada59', 
                'name' => 'Cancel 7D prior arrival 50% charge. No Show 50% charge.',
            ],
            [
                'code' => 'dc12b05b-14ba-407b-a56f-4888deb663da', 
                'name' => 'Cancel 45D prior arrival 1D charge. No Show 100% charge.',
            ],
            [
                'code' => 'dcebcf46-91c3-4892-a504-4bd6f02b28a9', 
                'name' => 'Cancel 2D prior arrival 1D charge. No Show 50% charge.',
            ],
            [
                'code' => 'de491812-7a61-4972-9f0c-e03d04784e38', 
                'name' => 'Cancel 10D prior arrival 1D charge. No Show 100% charge.',
            ],
            [
                'code' => 'e51ee3a5-4c6e-48d5-947f-c98cb6cef058', 
                'name' => 'Cancel 5D prior to arrival no charge. No show 100% charge.',
            ],
            [
                'code' => 'e5c15ca4-fe57-42b3-914d-b63b55e0f053', 
                'name' => 'Cancel 14D prior arrival 1D charge. Cancel 7D prior arrival 50% charge. No Show 100% charge.',
            ],
            [
                'code' => 'e7931842-88aa-448a-accb-63d2701fec91', 
                'name' => 'Cancel 31D prior arrival 1D charge. No Show 1D charge.',
            ],
            [
                'code' => 'e89534a7-4b4f-47d3-b300-f93e7a5d6116', 
                'name' => 'Cancel 14D prior arrival 2D charge.  No Show 50% charge.',
            ],
            [
                'code' => 'eee291d7-0274-4c92-929b-1ecfd5a0f1f1', 
                'name' => 'Cancel 365D prior arrival 1D charge. No Show 100% charge.',
            ],
            [
                'code' => 'f0899273-1b11-4859-b134-b89614b60e28', 
                'name' => 'Cancel 7D prior arrival 1D charge. Cancel 2D prior arrival 100% charge. No Show 100% charge.',
            ],
            [
                'code' => 'f3bac496-a140-4464-ab7b-9c58a5404011', 
                'name' => 'Cancel 15D prior arrival 100% charge. No Show 100% charge.',
            ],
            [
                'code' => 'f60b16f0-85f7-4931-ba48-3854a78f65ad', 
                'name' => 'Cancel before Check In Time No Charge. No Show 100% charge.',
            ],
            [
                'code' => 'f6e48d06-02fc-4d8c-9d3f-af157cb42914', 
                'name' => 'Cancel 14D prior arrival 50% charge. Cancel 3D prior arrival 100% charge. No Show 100% charge.',
            ],
            [
                'code' => 'fb0b5df2-091f-42b9-9181-28b8afa5154b', 
                'name' => 'Cancel 21D prior arrival 1D charge. Cancel 3D prior arrival 100% charge. No Show 100% charge.',
            ],
            [
                'code' => 'fc5025e5-420d-4e90-ba1c-ce7a238f69e8', 
                'name' => 'Cancel 1D prior arrival 100% charge. No Show 100% charge.',
            ],
            [
                'code' => 'fde427d2-6390-4ee4-9d57-4c1547bf4af4', 
                'name' => 'Cancel 60D prior arrival 1D charge. No Show 100% charge.',
            ]
        ];

        CancelationPolicy::insert($data);
    }
}
