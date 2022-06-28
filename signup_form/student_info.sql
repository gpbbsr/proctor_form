 

CREATE TABLE `student_info` (
  `name` varchar(255) NOT NULL DEFAULT '',
  `email` varchar(255) NOT NULL DEFAULT '',
  `password` varchar(255) NOT NULL DEFAULT '',
  `dob` date NOT NULL DEFAULT '',
  `phone` varchar(255) NOT NULL DEFAULT '',
  `address` varchar(255) NOT NULL DEFAULT '',
  `city` varchar(255) NOT NULL DEFAULT '',
  `state` varchar(255) NOT NULL DEFAULT '',
  `pincode` varchar(255) NOT NULL DEFAULT '',
  `father_name` varchar(255) NOT NULL DEFAULT '',
  `father_occupation` varchar(255) NOT NULL DEFAULT '',
  `father_contact` varchar(255) NOT NULL DEFAULT '',
  `mother_name` varchar(255) NOT NULL DEFAULT '',
  `mother_occupation` varchar(255) NOT NULL DEFAULT '',
  `mother_contact` varchar(255) NOT NULL DEFAULT '',
  `scholarship_name` varchar(255) NOT NULL DEFAULT '',
  `strength` varchar(255) NOT NULL DEFAULT '',
  `weakness` varchar(255) NOT NULL DEFAULT '',
  `hobbies` varchar(255) NOT NULL DEFAULT '',
  `extra_curricular` varchar(255) NOT NULL DEFAULT '',
  `hsc` varchar(255) NOT NULL DEFAULT '',
  `12th` varchar(255) NOT NULL DEFAULT '',
  `diploma` varchar(255) NOT NULL DEFAULT '',
  `pic` varchar(255) NOT NULL DEFAULT '',
  `sign` varchar(255) NOT NULL DEFAULT '',
  `hsc_image` varchar(255) NOT NULL DEFAULT '',
  `12th_image` varchar(255) NOT NULL DEFAULT '',
  `diploma_image` varchar(255) NOT NULL DEFAULT '',
  `pic_image` varchar(255) NOT NULL DEFAULT '',
  `signature_image` varchar(255) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- change default null

 DEFAULT ''