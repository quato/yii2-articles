Recommended Configuration for Advanced Template
====================================================

## Common Configuration
'modules' =>  [

        // Yii2 Articles
        'articles' => [
            'class' => 'cinghie\articles\Articles',

				// Select Languages allowed
				'languages' => [ 
					"it-IT" => "it-IT", 
					"en-GB" => "en-GB" 
				],          

				// Select Editor: no-editor, ckeditor, imperavi, tinymce, markdown
				'editor' => 'ckeditor',

				// Select Image Name: categoryname, original, casual
				'imageNameType' => 'categoryname',
				// Select Image Types allowed
				'imageType'     => 'jpg,jpeg,gif,png',
				// Thumbnails Options
				'thumbOptions'  => [ 
					'small'  => ['quality' => 100, 'width' => 150, 'height' => 100],
					'medium' => ['quality' => 100, 'width' => 200, 'height' => 150],
					'large'  => ['quality' => 100, 'width' => 300, 'height' => 250],
					'extra'  => ['quality' => 100, 'width' => 400, 'height' => 350],
				],
        ],
		
		// Module Kartik-v Grid
        'gridview' =>  [
            'class' => '\kartik\grid\Module',
        ],

        // Module Kartik-v Markdown Editor
        'markdown' => [
            'class' => 'kartik\markdown\Module',
        ],

]	

## Backend Configuration
'modules' =>  [

        // Yii2 Articles
        'articles' => [
            // Select Path To Upload Category Image
            'categoryImagePath' => '@frontend/web/img/articles/categories/',
            // Select URL To Upload Category Image
            'categoryImageURL'  => '/frontend/web/img/articles/categories/',
            // Select Path To Upload Category Thumb
            'categoryThumbPath' => '@frontend/web/img/articles/categories/thumb/',
            // Select URL To Upload Category Image
            'categoryThumbURL'  => '/frontend/web/img/articles/categories/thumb/',

            // Select Path To Upload Item Image
            'itemImagePath' => '@frontend/web/img/articles/items/',
            // Select URL To Upload Item Image
            'itemImageURL'  => '/frontend/web/img/articles/items/',
            // Select Path To Upload Item Thumb
            'itemThumbPath' => '@frontend/web/img/articles/items/thumb/',
            // Select URL To Upload Item Thumb
            'itemThumbURL'  => '/frontend/web/img/articles/items/thumb/',
        ],

]					

## Frontend Configuration	
'modules' =>  [

        // Yii2 Articles
        'articles' => [
            // Select Path To Upload Category Image
            'categoryImagePath' => '@webroot/img/articles/categories/',
            // Select URL To Upload Category Image
            'categoryImageURL'  => '@web/img/articles/categories/',
            // Select Path To Upload Category Thumb
            'categoryThumbPath' => '@webroot/img/articles/categories/thumb/',
            // Select URL To Upload Category Image
            'categoryThumbURL'  => '@web/img/articles/categories/thumb/',

            // Select Path To Upload Item Image
            'itemImagePath' => '@webroot/img/articles/items/',
            // Select URL To Upload Item Image
            'itemImageURL'  => '@web/img/articles/items/',
            // Select Path To Upload Item Thumb
            'itemThumbPath' => '@webroot/img/articles/items/thumb/',
            // Select URL To Upload Item Thumb
            'itemThumbURL'  => '@web/img/articles/items/thumb/',
        ],

]	
