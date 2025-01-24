import PropTypes from "prop-types";
import {Link} from "react-router-dom";
import {FiInfo, FiLogOut, FiUser} from "react-icons/fi";

export const ProfileCardOption = ({modalActive}) => {
  return (
    <>
      <div className={`bg-white flex-col absolute right-0 left-0 transform translate-y-32 shadow-md rounded-lg ${
        modalActive ? "flex" : "hidden"
      }`}>
        <Link to={'/profile'} className="py-4 px-4  hover:bg-background flex items-center gap-4 rounded-t-lg">
          <span className="text-xl"><FiUser/></span>
          Profile
        </Link>
        <Link to={'/options'} className="py-4 px-4  hover:bg-background flex items-center gap-x-4">
          <span className="text-xl"><FiInfo/></span>
          Options
        </Link>
        <button className="text-left py-4 px-4 hover:bg-background flex items-center gap-4 rounded-b-lg">
          <span className="text-xl"><FiLogOut/></span>
          Log Out
        </button>
      </div>
    </>
  )
}

ProfileCardOption.propTypes = {
  modalActive: PropTypes.bool.isRequired,
}