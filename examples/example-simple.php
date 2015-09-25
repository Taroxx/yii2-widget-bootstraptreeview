<?php
use execut\widget\TreeView;
use yii\web\JsExpression;

$items = [
    [
        'text' => 'Parent 1',
        'nodes' => [
            [
                'text' => 'Child 1',
                'nodes' => [
                    [
                        'text' => 'Grandchild 1'
                    ],
                    [
                        'text' => 'Grandchild 2'
                    ]
                ]
            ],
            [
                'text' => 'Child 2',
            ]
        ],
    ],
    [
        'text' => 'Parent 2',
    ]
];

$onSelect = new JsExpression(<<<JS
function (undefined, item) {
    console.log(item);
}
JS
);
$groupsContent = TreeView::widget([
    'data' => $data,
    'size' => TreeView::SIZE_SMALL,
    'clientOptions' => [
        'onNodeSelected' => $onSelect,
        'selectedBackColor' => 'rgb(40, 153, 57)',
        'borderColor' => '#fff',
    ],
]);