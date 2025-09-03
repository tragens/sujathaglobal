<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\SliderModel;

class Slider extends BaseController
{
    public function saveslider()
    {
        helper(['form', 'url']);

        $model = new SliderModel();

        $header = $this->request->getPost('header');
        $content = $this->request->getPost('content');
        $link = $this->request->getPost('link');
        $image = $this->request->getFile('image');

        $imageName = null;
        $imageUrl = '';

        if ($image && $image->isValid() && !$image->hasMoved()) {
            $imageName = $image->getRandomName();
            $image->move(ROOTPATH . 'uploads/', $imageName);
            $imageUrl = base_url('uploads/' . $imageName);
        }

        $model->save([
            'header'      => $header,
            'content'     => $content,
            'sliderimage' => $imageName,
            'link'        => $link,
            'status'      => 1 // default active
        ]);

        return $this->response->setJSON([
            'status'   => 'success',
            'message'  => 'Slider saved successfully.',
            'imageUrl' => $imageUrl
        ]);
    }

    public function getsliders()
    {
        $model = new SliderModel();
        // only get active sliders
        $sliders = $model->where('status', 1)->findAll();

        $formatted = [];

        foreach ($sliders as $slider) {
            $formatted[] = [
                'id'        => $slider['id'],
                'header'    => $slider['header'],
                'content'   => $slider['content'],
                'link'      => $slider['link'] ?? '',
                'imageUrl'  => $slider['sliderimage']
                    ? base_url('uploads/' . $slider['sliderimage'])
                    : ''
            ];
        }

        return $this->response->setJSON($formatted);
    }

    // 🔹 Soft DELETE (status = 5)
    public function delete($id = null)
    {
        $model = new SliderModel();

        if ($this->request->isAJAX()) {
            if ($model->update($id, ['status' => 5])) {
                return $this->response->setJSON([
                    'status' => 'success',
                    'message' => 'Slider deleted successfully (soft delete).'
                ]);
            }
            return $this->response->setJSON([
                'status' => 'error',
                'message' => 'Failed to delete slider.'
            ]);
        }
    }

    // 🔹 EDIT SLIDER
    public function edit($id = null)
    {
        helper(['form', 'url']);
        $model = new SliderModel();

        if ($this->request->isAJAX()) {
            $data = [
                'header'  => $this->request->getPost('header'),
                'content' => $this->request->getPost('content'),
                'link'    => $this->request->getPost('link'),
            ];

            // handle optional image update
            $image = $this->request->getFile('image');
            if ($image && $image->isValid() && !$image->hasMoved()) {
                $imageName = $image->getRandomName();
                $image->move(ROOTPATH . 'uploads/', $imageName);
                $data['sliderimage'] = $imageName;
            }

            if ($model->update($id, $data)) {
                return $this->response->setJSON([
                    'status' => 'success',
                    'message' => 'Slider updated successfully.'
                ]);
            }
            return $this->response->setJSON([
                'status' => 'error',
                'message' => 'Failed to update slider.'
            ]);
        }
    }
}
