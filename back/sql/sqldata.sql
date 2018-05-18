INSERT INTO `dogs`
    (`name`, `gender`, `age`, `spayed`, `weight`, `breed`, `arrivaldate`, `notes`, `picture`, `status`)
VALUES
    ('dog1', 'male', 'adult', 'spayed', '50kg', 'mixed', now() - INTERVAL 10 DAY, 'Healthy cheerful dog1', 'https://dl5zpyw5k3jeb.cloudfront.net/photos/pets/41628664/1/', 1),
    ('dog2', 'female', 'puppy', 'not spayed', '81kg', 'Kuvasz', now() - INTERVAL 11 DAY, 'Healthy cheerful dog2', 'https://dl5zpyw5k3jeb.cloudfront.net/photos/pets/41610832/1/', 1),
    ('dog3', 'female', 1, 'spayed', '18kg', 'corgi', now() - INTERVAL 100 DAY, 'Healthy cheerful dog3', 'https://dl5zpyw5k3jeb.cloudfront.net/photos/pets/41610831/1/', 1),
    ('dog4', 'male', 12, 'spayed', '28kg', 'corgi', now() - INTERVAL 102 DAY, 'Healthy cheerful dog4', 'https://dl5zpyw5k3jeb.cloudfront.net/photos/pets/41560770/1/', 1),
    ('dog5', 'female', 'adult', 'not spayed', '34kg', 'mixed', now() - INTERVAL 54 DAY, 'Healthy cheerful dog5', 'https://dl5zpyw5k3jeb.cloudfront.net/photos/pets/41560775/1/', 1),
    ('dog6', 'male', 'puppy', 'not spayed', '21kg', 'husky', now() - INTERVAL 34 DAY, 'Healthy cheerful dog6', 'https://dl5zpyw5k3jeb.cloudfront.net/photos/pets/41560773/1/', 1),
    ('dog7', 'female', 15, 'not spayed', '32kg', 'mixed', now() - INTERVAL 61 DAY, 'Healthy cheerful dog7', 'https://dl5zpyw5k3jeb.cloudfront.net/photos/pets/41552689/1/', 1),
    ('dog8', 'female', 4, 'spayed', '12kg', 'corgi', now() - INTERVAL 31 DAY, 'Healthy cheerful dog8', 'http://cdn.skim.gs/image/upload/v1456337662/msi/adopt-a-senior-dog_mz4dw9.jpg', 1),
    ('dog9', 'male', 'puppy', 'not spayed', '1kg', 'husky', now() - INTERVAL 54 DAY, 'Healthy cheerful dog9', 'https://puranaturalspet.com/blog/wp-content/uploads/2017/09/Home-Dog.jpg', 1),
    ('dog10', 'female', 'adult', 'not spayed', '21kg', 'corgi', now() - INTERVAL 43 DAY, 'Healthy cheerful dog10', 'https://upload.wikimedia.org/wikipedia/commons/thumb/f/fb/Welchcorgipembroke.JPG/1200px-Welchcorgipembroke.JPG', 1),
    ('dog11', 'male', 7, 'spayed', '43kg', 'mixed', now() - INTERVAL 136 DAY, 'Healthy cheerful dog11', 'http://a57.foxnews.com/images.foxnews.com/content/fox-news/lifestyle/2018/03/08/corgi-got-fat-shamed-and-internet-could-not-handle-it/_jcr_content/par/featured_image/media-0.img.jpg/931/524/1520540975471.jpg', 1),
    ('dog12', 'male', 'puppy', 'spayed', '41kg', 'corgi', now() - INTERVAL 64 DAY, 'Healthy cheerful dog12', 'http://trupanion.com/blog/wp-content/uploads/2017/09/GettyImages-512536165.jpg', 1),
    ('dog13', 'female', 'adult', 'not spayed', '24kg', 'mixed', now() - INTERVAL 13 DAY, 'Healthy cheerful dog13', 'http://trupanion.com/blog/wp-content/uploads/2017/09/GettyImages-512536165.jpg', 1),
    ('dog14', 'female', 6, 'spayed', '15kg', 'husky', now() - INTERVAL 42 DAY, 'Healthy cheerful dog14', 'https://dl5zpyw5k3jeb.cloudfront.net/photos/pets/41552689/1/', 1),
    ('dog15', 'male', 'adult', 'not spayed', '17kg', 'corgi', now() - INTERVAL 12 DAY, 'Healthy cheerful dog15', 'https://dl5zpyw5k3jeb.cloudfront.net/photos/pets/41560770/1/', 1);
------------------------------- STORY 1
INSERT INTO `stories`
    (`uploaddate`, `content`, `picture`)
VALUES
    (now() - INTERVAL 11 DAY, 'text sometext moretext text sometext moretext text sometext moretext text sometext moretext text sometext moretext text sometext moretext text sometext moretext text sometext moretext text sometext moretext text sometext moretexttext sometext moretexttext sometext moretext text sometext moretext text sometext moretext text sometext moretexttext sometext moretexttext sometext moretexttext sometext moretexttext sometext moretexttext sometext moretexttext sometext moretext text sometext moretext text sometext moretext text sometext moretext text sometext moretext', 'https://dl5zpyw5k3jeb.cloudfront.net/photos/pets/41560770/1/');

INSERT INTO `mappingmultiple`
    (`storyid`, `dogid`)
VALUES
    (1, 15);
    ----------------------------- STORY 2
INSERT INTO `stories`
    (`uploaddate`, `content`, `picture`);
    (now() - INTERVAL 12 DAY, 'text sometext moretext text sometext moretext text sometext moretext text sometext moretext text sometext moretext text sometext moretext text sometext moretext text sometext moretext text sometext moretext text sometext moretexttext sometext moretexttext sometext moretext text sometext moretext text sometext moretext text sometext moretexttext sometext moretexttext sometext moretexttext sometext moretexttext sometext moretexttext sometext moretexttext sometext moretext text sometext moretext text sometext moretext text sometext moretext text sometext moretext', 'https://dl5zpyw5k3jeb.cloudfront.net/photos/pets/41552689/1/');

INSERT INTO `mappingmultiple`
    (`storyid`, `dogid`)
VALUES
    (2, 14);
    ----------------------------- STORY 3
INSERT INTO `stories`
    (`uploaddate`, `content`, `picture`)
VALUES
    (now() - INTERVAL 23 DAY, 'text sometext moretext text sometext moretext text sometext moretext text sometext moretext text sometext moretext text sometext moretext text sometext moretext text sometext moretext text sometext moretext text sometext moretexttext sometext moretexttext sometext moretext text sometext moretext text sometext moretext text sometext moretexttext sometext moretexttext sometext moretexttext sometext moretexttext sometext moretexttext sometext moretexttext sometext moretext text sometext moretext text sometext moretext text sometext moretext text sometext moretext', 'http://trupanion.com/blog/wp-content/uploads/2017/09/GettyImages-512536165.jpg');

INSERT INTO `mappingmultiple`
    (`storyid`, `dogid`)
VALUES
    (3, 13);
    ----------------------------- STORY 4
INSERT INTO `stories`
    (`uploaddate`, `content`, `picture`)
VALUES
    (now() - INTERVAL 43 DAY, 'text sometext moretext text sometext moretext text sometext moretext text sometext moretext text sometext moretext text sometext moretext text sometext moretext text sometext moretext text sometext moretext text sometext moretexttext sometext moretexttext sometext moretext text sometext moretext text sometext moretext text sometext moretexttext sometext moretexttext sometext moretexttext sometext moretexttext sometext moretexttext sometext moretexttext sometext moretext text sometext moretext text sometext moretext text sometext moretext text sometext moretext', 'http://trupanion.com/blog/wp-content/uploads/2017/09/GettyImages-512536165.jpg');

INSERT INTO `mappingmultiple`
    (`storyid`, `dogid`)
VALUES
    (4, 12);
    ----------------------------- STORY 5
INSERT INTO `stories`
    (`uploaddate`, `content`, `picture`)
VALUES
    (now() - INTERVAL 52 DAY, 'text sometext moretext text sometext moretext text sometext moretext text sometext moretext text sometext moretext text sometext moretext text sometext moretext text sometext moretext text sometext moretext text sometext moretexttext sometext moretexttext sometext moretext text sometext moretext text sometext moretext text sometext moretexttext sometext moretexttext sometext moretexttext sometext moretexttext sometext moretexttext sometext moretexttext sometext moretext text sometext moretext text sometext moretext text sometext moretext text sometext moretext', 'http://a57.foxnews.com/images.foxnews.com/content/fox-news/lifestyle/2018/03/08/corgi-got-fat-shamed-and-internet-could-not-handle-it/_jcr_content/par/featured_image/media-0.img.jpg/931/524/1520540975471.jpg');

INSERT INTO `mappingmultiple`
    (`storyid`, `dogid`)
VALUES
    (5, 11);
    ----------------------------- STORY 6
INSERT INTO `stories`
    (`uploaddate`, `content`, `picture`)
VALUES
    (now() - INTERVAL 15 DAY, 'text sometext moretext text sometext moretext text sometext moretext text sometext moretext text sometext moretext text sometext moretext text sometext moretext text sometext moretext text sometext moretext text sometext moretexttext sometext moretexttext sometext moretext text sometext moretext text sometext moretext text sometext moretexttext sometext moretexttext sometext moretexttext sometext moretexttext sometext moretexttext sometext moretexttext sometext moretext text sometext moretext text sometext moretext text sometext moretext text sometext moretext', 'https://upload.wikimedia.org/wikipedia/commons/thumb/f/fb/Welchcorgipembroke.JPG/1200px-Welchcorgipembroke.JPG');

INSERT INTO `mappingmultiple`
    (`storyid`, `dogid`)
VALUES
    (6, 10);
    ----------------------------- STORY 7
INSERT INTO `stories`
    (`uploaddate`, `content`, `picture`)
VALUES
    (now() - INTERVAL 65 DAY, 'text sometext moretext text sometext moretext text sometext moretext text sometext moretext text sometext moretext text sometext moretext text sometext moretext text sometext moretext text sometext moretext text sometext moretexttext sometext moretexttext sometext moretext text sometext moretext text sometext moretext text sometext moretexttext sometext moretexttext sometext moretexttext sometext moretexttext sometext moretexttext sometext moretexttext sometext moretext text sometext moretext text sometext moretext text sometext moretext text sometext moretext', 'https://puranaturalspet.com/blog/wp-content/uploads/2017/09/Home-Dog.jpg');

INSERT INTO `mappingmultiple`
    (`storyid`, `dogid`)
VALUES
    (7, 9);
    ----------------------------- STORY 8
INSERT INTO `stories`
    (`uploaddate`, `content`, `picture`)
VALUES
    (now() - INTERVAL 74 DAY, 'text sometext moretext text sometext moretext text sometext moretext text sometext moretext text sometext moretext text sometext moretext text sometext moretext text sometext moretext text sometext moretext text sometext moretexttext sometext moretexttext sometext moretext text sometext moretext text sometext moretext text sometext moretexttext sometext moretexttext sometext moretexttext sometext moretexttext sometext moretexttext sometext moretexttext sometext moretext text sometext moretext text sometext moretext text sometext moretext text sometext moretext', 'http://cdn.skim.gs/image/upload/v1456337662/msi/adopt-a-senior-dog_mz4dw9.jpg');

INSERT INTO `mappingmultiple`
    (`storyid`, `dogid`)
VALUES
    (8, 8);
    ----------------------------- STORY 9
INSERT INTO `stories`
    (`uploaddate`, `content`, `picture`)
VALUES
    (now() - INTERVAL 85 DAY, 'text sometext moretext text sometext moretext text sometext moretext text sometext moretext text sometext moretext text sometext moretext text sometext moretext text sometext moretext text sometext moretext text sometext moretexttext sometext moretexttext sometext moretext text sometext moretext text sometext moretext text sometext moretexttext sometext moretexttext sometext moretexttext sometext moretexttext sometext moretexttext sometext moretexttext sometext moretext text sometext moretext text sometext moretext text sometext moretext text sometext moretext', 'https://dl5zpyw5k3jeb.cloudfront.net/photos/pets/41552689/1/');

INSERT INTO `mappingmultiple`
    (`storyid`, `dogid`)
VALUES
    (9, 7);
    ----------------------------- STORY 10
INSERT INTO `stories`
    (`uploaddate`, `content`, `picture`)
VALUES
    (now() - INTERVAL 65 DAY, 'text sometext moretext text sometext moretext text sometext moretext text sometext moretext text sometext moretext text sometext moretext text sometext moretext text sometext moretext text sometext moretext text sometext moretexttext sometext moretexttext sometext moretext text sometext moretext text sometext moretext text sometext moretexttext sometext moretexttext sometext moretexttext sometext moretexttext sometext moretexttext sometext moretexttext sometext moretext text sometext moretext text sometext moretext text sometext moretext text sometext moretext', 'https://dl5zpyw5k3jeb.cloudfront.net/photos/pets/41560773/1/');

INSERT INTO `mappingmultiple`
    (`storyid`, `dogid`)
VALUES
    (10, 6);
    ----------------------------- STORY 11
INSERT INTO `stories`
    (`uploaddate`, `content`, `picture`)
VALUES
    (now() - INTERVAL 1 DAY, 'text sometext moretext text sometext moretext text sometext moretext text sometext moretext text sometext moretext text sometext moretext text sometext moretext text sometext moretext text sometext moretext text sometext moretexttext sometext moretexttext sometext moretext text sometext moretext text sometext moretext text sometext moretexttext sometext moretexttext sometext moretexttext sometext moretexttext sometext moretexttext sometext moretexttext sometext moretext text sometext moretext text sometext moretext text sometext moretext text sometext moretext', 'https://dl5zpyw5k3jeb.cloudfront.net/photos/pets/41560775/1/');

INSERT INTO `mappingmultiple`
    (`storyid`, `dogid`)
VALUES
    (11, 5);
    ----------------------------- STORY 12
INSERT INTO `stories`
    (`uploaddate`, `content`, `picture`)
VALUES
    (now() - INTERVAL 74 DAY, 'text sometext moretext text sometext moretext text sometext moretext text sometext moretext text sometext moretext text sometext moretext text sometext moretext text sometext moretext text sometext moretext text sometext moretexttext sometext moretexttext sometext moretext text sometext moretext text sometext moretext text sometext moretexttext sometext moretexttext sometext moretexttext sometext moretexttext sometext moretexttext sometext moretexttext sometext moretext text sometext moretext text sometext moretext text sometext moretext text sometext moretext', 'https://dl5zpyw5k3jeb.cloudfront.net/photos/pets/41560770/1/');

INSERT INTO `mappingmultiple`
    (`storyid`, `dogid`)
VALUES
    (12, 4);
    ----------------------------- STORY 13
INSERT INTO `stories`
    (`uploaddate`, `content`, `picture`)
VALUES
    (now() - INTERVAL 52 DAY, 'text sometext moretext text sometext moretext text sometext moretext text sometext moretext text sometext moretext text sometext moretext text sometext moretext text sometext moretext text sometext moretext text sometext moretexttext sometext moretexttext sometext moretext text sometext moretext text sometext moretext text sometext moretexttext sometext moretexttext sometext moretexttext sometext moretexttext sometext moretexttext sometext moretexttext sometext moretext text sometext moretext text sometext moretext text sometext moretext text sometext moretext', 'https://dl5zpyw5k3jeb.cloudfront.net/photos/pets/41610831/1/');

INSERT INTO `mappingmultiple`
    (`storyid`, `dogid`)
VALUES
    (13, 3);
    ----------------------------- STORY 14
INSERT INTO `stories`
    (`uploaddate`, `content`, `picture`)
VALUES
    (now() - INTERVAL 83 DAY, 'text sometext moretext text sometext moretext text sometext moretext text sometext moretext text sometext moretext text sometext moretext text sometext moretext text sometext moretext text sometext moretext text sometext moretexttext sometext moretexttext sometext moretext text sometext moretext text sometext moretext text sometext moretexttext sometext moretexttext sometext moretexttext sometext moretexttext sometext moretexttext sometext moretexttext sometext moretext text sometext moretext text sometext moretext text sometext moretext text sometext moretext', 'https://dl5zpyw5k3jeb.cloudfront.net/photos/pets/41610832/1/');

INSERT INTO `mappingmultiple`
    (`storyid`, `dogid`)
VALUES
    (14, 2);
    ----------------------------- STORY 15
INSERT INTO `stories`
    (`uploaddate`, `content`, `picture`)
VALUES
    (now() - INTERVAL 130 DAY, 'text sometext moretext text sometext moretext text sometext moretext text sometext moretext text sometext moretext text sometext moretext text sometext moretext text sometext moretext text sometext moretext text sometext moretexttext sometext moretexttext sometext moretext text sometext moretext text sometext moretext text sometext moretexttext sometext moretexttext sometext moretexttext sometext moretexttext sometext moretexttext sometext moretexttext sometext moretext text sometext moretext text sometext moretext text sometext moretext text sometext moretext', 'https://dl5zpyw5k3jeb.cloudfront.net/photos/pets/41628664/1/');

INSERT INTO `mappingmultiple`
    (`storyid`, `dogid`)
VALUES
    (15, 1);



---------------Operations 
SELECT *
FROM stories
INNER JOIN mappingmultiple ON stories.id = mappingmultiple.storyid;